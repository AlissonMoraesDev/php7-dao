<?php 

require_once("config.php");

// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);

// Carrega um usuário
// $root = new Usuario();
// $root->loadById(2);
// echo $root;

// Carrega uma lista de usuários

// $lista = Usuario::getList();

// echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo logina

// $search = Usuario::search("vi");

// echo json_encode($search);

// carrega um usuário usando login e senha

// $usuario = new Usuario();
// $usuario->login('Alisson', '021698');

// echo $usuario;
// Criando um novo usuário

// $aluno = new Usuario();
// $aluno->setDeslogin('Programador');
// $aluno->setDessenha('@123456');


// $aluno->insert();

// echo $aluno;

$usuario = new Usuario();
$usuario->loadById(8);

$usuario->update("Professor", "!@#$%¨&*");

echo $usuario;


?>