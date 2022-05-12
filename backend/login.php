<?php
session_start();

// $psw = password_hash($_POST["psw"], PASSWORD_BCRYPT, [ "cost" => 15 ]);
$psw = $_POST["psw"];

$sql = new mysqli("localhost:3306", "root", "", "Vacanza") or die($sql->error_log);
$res = $sql->query("SELECT `username`,`email`,`psw` FROM `account` where `username`='{$_POST["username"]}' and `email`='{$_POST["email"]}' and `psw`='$psw'");

if ($res->num_rows == 1) {
    $_SESSION["username"] = $_POST["username"];
} else {
    echo "<script>alert('Errore durante la fase di accesso! Riprova!');</script>";
}

$sql->close();
header("Location:../index.php");
?>
