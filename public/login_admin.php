<?php
session_start();
date_default_timezone_set('Asia/Jakarta');

require __DIR__.'/../vendor/autoload.php';

if (isset($_SESSION['logged_in'])){
    header('location: admin.php');
}

// Ambil DATABASE_URL dari environment
$DATABASE_URL = getenv("DATABASE_URL") ?: getenv("MYSQL_URL");

if (!$DATABASE_URL) {
    die("DATABASE_URL tidak ditemukan!");
}

// Parse URL
$dbUrl = parse_url($DATABASE_URL);

$host = $dbUrl['host'];
$user = $dbUrl['user'];
$pass = $dbUrl['pass'];
$db   = ltrim($dbUrl['path'], '/');
$port = $dbUrl['port'] ?? 3306; // default ke 3306 jika tidak disediakan

// Buat koneksi
$conn = new mysqli($host, $user, $pass, $db, $port);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

//tampung client secret, client id, dan redirect uri
$client_id          = getenv('GOOGLE_CLIENT_ID');
$client_secret      = getenv('GOOGLE_CLIENT_SECRET');
$redirect_uri       = getenv('GOOGLE_REDIRECT_URI');

//inisiasi google client
$client = new Google_Client();

//konfigurasi google client
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);

$client->addScope('email');
$client->addScope('profile');

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    // echo "<pre>";
    // print_r($token);
    // echo "</pre>";

    if (!isset($token['error'])) {
        $client->setAccessToken($token['access_token']);

        //inisiasi google service oauth2
        $service = new Google_Service_Oauth2($client);
        $profile = $service->userinfo->get();

        // echo "<pre>";
        // print_r($profile);
        // echo "</pre>";

        $name = $profile['name'];
        $email = $profile['email'];
        $id = $profile['id'];
        $currtime = date('Y-m-d H:i:s');

        //jika id ada ditable user, maka lakukan update data
        $query_check = 'SELECT * FROM user WHERE oauth_id = "'.$id.'"';
        $run_query_check = mysqli_query($conn, $query_check);
        $d = mysqli_fetch_object($run_query_check);
        
        if ($d) {
            $query_update = 'UPDATE user SET fullname = "'.$name.'", email = "'.$email.'", last_login = "'.$currtime.'" WHERE oauth_id = "'.$id.'"';
            $run_query_update = mysqli_query($conn, $query_update);
            
        //     }else {

        //     // jika id tidak ada di table user, maka lakukan insert data
                
        //     $query_insert = 'INSERT INTO user (fullname, email, oauth_id, last_login)
        //     VALUE ("'.$name.'", "'.$email.'", "'.$id.'", "'.$currtime.'")';
        //     $run_query_insert = mysqli_query($conn, $query_insert);
        // }

        //daftarin session
        $_SESSION['logged_in'] = true;
        $_SESSION['access_token'] = $token['access_token'];
        $_SESSION['uname'] = $name;
        
        echo "
            <script>
                alert('Login Berhasil!');
                document.location.href = '/admin.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Login Gagal!');
                document.location.href = '/index.php';
            </script>
        ";
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===================== BOX ICONS ==================== -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===================== CSS ==================== -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- <style>
            .login__container{
                width: 600px;
                height: 250px;
            }

            .title-login{
                top: -5px;
            }
        </style> -->

        <!-- ===================== SLICK CSS ==================== -->
        <!-- <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
        <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css"> -->

        <title>Ataraxia</title>
    </head>
    <body>

        <!-- ===================== HEADER ==================== -->
        <header class="l-header" id="header">
            <nav class="nav bd-container">

                <a href="#" class="nav__logo">Ataraxia</a>

            </nav>
        </header>

        <main class="l-main">
            <!--========== PAGINATION ==========-->            
            <section class="section bd-container" id="breadcrumb">
                <div class="bd-grid breadcrumb">
                    <div class="breadcrumb">
                        <li><a href="index.php"> <i class='bx bxs-home'></i>  Home</a></li>
                        <li>Admin</li>
                    </div>
                    <div class="breadcrumb-pagination">
                    </div>
                </div>
            </section>

            <section class="login bd-container">
                <div class="login__container bd-grid">
                    <div class="user">
                        <h2 class="title-login section-subtitle">Sign Up</h2>
                        <div class="breadcrumb-pagination">
                        </div>
                        <div class="inputbox">
                            <i class='bx bx-envelope' id="i"></i>
                            <input type="email" name="email" id="email" required>
                            <label for="">Email</label>
                        </div>
                        <div class="inputbox">
                            <i class='bx bx-lock-alt' id="i"></i>
                            <input type="password" name="pass" id="pass" required>
                            <label for="">Password</label>
                        </div>
                        <small><b>Forgot Password?</b></small>
                        <div class="button-login">
                            <a href="" class="button" style="width: 100%; text-align: center; margin: 15px 0 0">Login</a>
                            <div class="breadcrumb-pagination" style="margin: 10px 0"></div>
                            <a href='<?= $client->createAuthUrl() ?>' class="button" style="width: 100%; text-align:center; background-color: #fff; color: #000; border: 1px solid grey">
                                <img width="20px"
                                style="margin-bottom:-4px; margin-right:8px"
                                alt="Google sign-in"
                                src="assets/img/asset/g.png" />
                                Sign in With Google
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- ===================== SCROLL REVEAL ==================== -->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!-- ===================== MAIN JS  ==================== -->
        <script src="assets/js/main.js"></script>

        <!-- ===================== SLICK JS  ==================== -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/slick.min.js"></script>
    </body>
</html>