<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

$adm = new Usuario();

$adm->loadById(5);

echo $adm;

 ?>