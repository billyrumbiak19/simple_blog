<?php

require_once "koneksi.php";
require_once "function.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
</head>
<body>

    <h1>Blog Sederhana</h1>
    <a href="create.php">+ Tambah Postingan</a>
    </hr>

    <?php
        tampilkanSemuaPost($koneksi);
    ?>
    
</body>
</html>