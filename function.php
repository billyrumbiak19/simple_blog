<?php

function tampilkanSemuaPost($koneksi) {
    $result = $koneksi->query("SELECT * FROM posts ORDER BY created_at DESC");

    while ($row = $result->fetch_assoc()) {
        echo "<h2><a href='post.php?id={$row['id']}'>" . htmlspecialchars($row['title']) . "</a></h2>";
        echo "<p><em>" . $row['created_at'] . "</em></p>";
        echo "<hr>";
    }
}

function tambahkanPostingan($koneksi) {
    if (isset($_POST['submit'])) {
    $title = $koneksi->real_escape_string($_POST["title"]);
    $content = $koneksi->real_escape_string($_POST["content"]);

    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
        if ($koneksi->query($sql)) {
            echo "<p>Postingan berhasil ditambahkan!</p>";
            echo "<a href='index.php'>Kembali ke Beranda</a>";
        } else {
            echo "Error: " . $koneksi->error;
        }
    }
}