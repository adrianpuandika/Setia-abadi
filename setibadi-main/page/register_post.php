<?php
require_once 'koneksi.php';

if (!isset($_POST['username'])) {
    header('location:register.php');
} else {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    $query = "SELECT * FROM user WHERE username=:username";
    $statement = $connect->prepare($query);
    $statement->execute(
        array(
            'username' => $username
        )
    );
    $count = $statement->rowCount();
    if($count > 0)
    {
        header('location:register.php');
    } else {
        $q = "INSERT INTO user(username, password) VALUES(:username, :password)";
        $st = $connect->prepare($q);
        $st->execute(
            array(
                'username' => $_POST['username'],
                'password' => md5($_POST['password'])
            )
        );
        $q2 = "SELECT * FROM user WHERE username=:username";
        $st2 = $connect->prepare($q2);
        $st2->execute(
            array(
                'username' => $_POST['username']
            )
        );
        session_start();
        $row = $st2->fetch();
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["user_id"] = $row['id'];
        header('location:user.php');
    }
}