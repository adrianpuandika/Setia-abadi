<?php
require_once 'session.php'; require_once 'koneksi.php';

if (!isset($_POST['judul'])) {
    header('location:admin.php');
} else {
    $query = "SELECT * FROM post WHERE id=:id";
    $q = "INSERT INTO post(judul, konten, kategori, created_at, user_id) VALUES(:judul, :konten, :kategori, :created_at, :user_id)";
    $st = $connect->prepare($q);
    $st->execute(
        array(
            'judul' => $_POST['judul'],
            'konten' => $_POST['konten'],
            'kategori' => $_POST['kategori'],
            'created_at' => date('Y-m-d'),
            'user_id' => $_SESSION['user_id']
        )
    );
    header('location:admin.php');
}