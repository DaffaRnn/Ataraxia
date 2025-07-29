<?php
$DATABASE_URL = getenv("DATABASE_URL");

if ($DATABASE_URL) {
    $url = parse_url($DATABASE_URL);
    
    $host = $url["host"];
    $user = $url["user"];
    $pass = $url["pass"];
    $db   = ltrim($url["path"], "/");
    $port = $url["port"];

    $conn = new mysqli($host, $user, $pass, $db, $port);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
} else {
    die("DATABASE_URL tidak ditemukan!");
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