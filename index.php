<?php
require_once("config.php");

$sql = new Sql();

$sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
?>