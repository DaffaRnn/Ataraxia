<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Pastikan autoload tetap digunakan

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
// var_dump($conn);

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
    }
    return $rows;
}

function cariData($id){
    global $conn;
     $stmt = $conn->prepare("SELECT 
     product.id, 
     product.product_name, 
     product.product_detail, 
     product.product_price, 
     detail_img.img_1, 
     detail_img.img_2, 
     detail_img.img_3, 
     detail_img.img_4 
     FROM product INNER JOIN detail_img ON product.id = detail_img.id_img WHERE product.id=?");
     $stmt->execute([$id]);
     $data = $stmt->get_result();
     return $data;
}
?>