<?php

require_once "koneksi.php";
require_once "function.php";

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
    $sql = "SELECT * FROM posts WHERE id = $id";
    $result = $koneksi->query($sql);

    if($result->num_rows == 0) {
        die("Postingan tidak ditemukan.");
    }
$post = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($post['title']); ?></title>
</head>
<body>

    <h1><?php echo htmlspecialchars($post['title']); ?></h1>
    <p><em><?php echo $post['created_at']; ?></em></p>
    <p><?php echo nl2br(htmlspecialchars($post['title'])); ?></p>
    
    <a href="index.php">Kembali ke Beranda</a>
</body>
</html>