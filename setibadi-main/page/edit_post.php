<?php
require_once 'session.php'; require_once 'koneksi.php';

if (!isset($_POST['id'])) {
    header('location:admin.php');
} else {
    $query = "SELECT * FROM post WHERE id=:id";
    $statement = $connect->prepare($query);
    $statement->execute(
        array(
            'id' => $_POST['id']
        )
    );
    $count = $statement->rowCount();
    if($count > 0)
    {
        $q = "UPDATE post SET judul=:judul, konten=:konten, kategori=:kategori WHERE id=:id";
        $st = $connect->prepare($q);
        $st->execute(
            array(
                'id' => $_POST['id'],
                'judul' => $_POST['judul'],
                'konten' => $_POST['konten'],
                'kategori' => $_POST['kategori']
            )
        );
    }
    header('location:admin.php');
}