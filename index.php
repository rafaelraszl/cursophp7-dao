<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

//Carrega um usuário apenas
/*$adm = new Usuario();
$adm->loadById(5);
echo $adm;*/

//Carrega uma lista de usuários
/*$lista = Usuario::getList();
echo json_encode($lista);*/

//Carrega uma lista de usuários buscando pelo login
/*$search = Usuario::search("ma");
echo json_encode($search);*/

//Carrega um usuário usando o login e a senha
/*$usuario = new Usuario();
$usuario->login("adm", "administrador");
echo $usuario;*/

//Criando um novo usuario - Insert
/*
$aluno = new Usuario("maze", "maze123");

$aluno->insert();

echo $aluno;*/

//Alterar um usuário
/*
$usuario = new Usuario();

$usuario->loadById(15);

$usuario->update("sidneia", "sidneiaciclovittal");

echo $usuario;*/

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;

 ?>