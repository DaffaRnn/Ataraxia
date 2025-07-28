<?php
$host = getenv("DB_HOST");
$user = getenv("DB_USER");
$pass = getenv("DB_PASS");
$db   = getenv("DB_NAME");

$conn = new mysqli($host, $user, $pass, $db);

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