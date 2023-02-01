<?php
require_once 'session.php';
require_once 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM post WHERE id=:id";
    $statement = $connect->prepare($query);
    $statement->execute(
        array(
            'id'     =>     $id
        )
    );

    header('location:admin.php');
}