<?php
// tangkap input login
$credentials = [$_POST['email'], md5($_POST['password'])];

include_once "koneksi.php";

// query cek user
$query = "SELECT * FROM users WHERE email = ? AND password = ?";
$statement = $dbh->prepare($query);
$statement->execute($credentials);
$result = $statement->fetch();

// cek hasil query
if ($result) {
    // login berhasil
    session_start();
    $_SESSION['name'] = $result['name'];
    $_SESSION['email'] = $result['email'];
    header("Location: dashboard.php");
} else {
    // login gagal
    header("Location: index.html?error=1");
}
