<?php
require_once 'session.php'; require_once 'koneksi.php';

if (!isset($_POST['username'])) {
    header('location:admin.php');
} else {
    $query = "SELECT * FROM user WHERE username=:username AND id!=:id";
    $statement = $connect->prepare($query);
    $statement->execute(
        array(
            'id' => $_SESSION['user_id'],
            'username' => $_POST['username']
        )
    );
    $count = $statement->rowCount();
    if($count > 0)
    {
    } else {
        $q = "UPDATE user SET username=:username WHERE id=:id";
        $st = $connect->prepare($q);
        $st->execute(
            array(
                'id' => $_SESSION['user_id'],
                'username' => $_POST['username']
            )
        );
    }
    header('location:user.php');
}