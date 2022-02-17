<?php
session_start();

$sql = new mysqli("localhost:3306", "root", "", "Vacanza") or die($sql->error_log);

$result = $sql->query("SELECT `id` FROM `account` WHERE `username`='{$_SESSION["username"]}'");
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $id = $row["id"];
  }
} else {
  echo "0 results";
}

$sql->query("INSERT INTO `conto`(`descrizione`, `dataBonifico`, `ammontare`, `tipo`, `_mittente`) VALUES ('{$_POST["descrizione"]}','{$_POST["data"]}','{$_POST["ammontare"]}','{$_POST["tipo"]}','$id')");
?>
