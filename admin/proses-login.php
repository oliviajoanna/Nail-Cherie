<?php
session_start();
include 'config/config.php';
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = MD5($_POST['password']);
    $query = "SELECT * FROM admin WHERE username = '$username' and password='$password'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_num_rows($result) ;
    if ($row>0) {
            $data = mysqli_fetch_assoc($result);
            $_SESSION['user'] = $username;
            $_SESSION['id_user']= $data['id_admin'];
            header("Location: dashboard/dashboard.php");
            exit;
    } else {
        $_SESSION['error'] = "Login failed. Username not found.";
    }
   header("Location: index.php");
    exit;
} else {
    $_SESSION['error'] = "Login data iis not complete.";
    header("Location: index.php");
    exit;
}
?>