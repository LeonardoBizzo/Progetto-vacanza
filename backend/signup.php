<?php
session_start();

// $psw = password_hash($_POST["psw"], PASSWORD_BCRYPT, [ "cost" => 15 ]);
$psw = $_POST["psw"];

$sql = new mysqli("localhost:3306", "root", "", "Vacanza") or die($sql->error_log);
$sql->query("INSERT INTO `account`(`nome`, `cognome`, `username`, `email`, `psw`) VALUES ('{$_POST["nome"]}','{$_POST["cognome"]}','{$_POST["username"]}','{$_POST["email"]}','$psw')");

if ($sql->affected_rows == 1) {
    $_SESSION["username"] = $_POST["username"];
} else {
    echo "<script>alert('Errore durante la fase di registrazione! Riprova!');</script>";
}

$sql->close();
header("Location:../index.php");
?>
