<?php

require_once "koneksi.php";
require_once "function.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Postingan</title>
</head>
<body>

    <h1>Tambah Postingan Baru</h1>
    <form action="" method="post">
        <p>Judul:</p>
        <input type="text" name="title" required>
        <p>Konten:</p>
        <textarea name="content" rows="10" cols="50" required></textarea><br>
        <button type="submit" name="submit">Simpan</button>
    </form>
    
    <?php
        tambahkanPostingan($koneksi)
    ?>

</body>
</html>