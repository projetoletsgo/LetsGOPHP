<?php
include ('../connection.php');

$funcoes = ['logar','cadastrarUsuario'];
if(in_array($_POST['tipo'], $funcoes)){
	echo $_POST['tipo']();
}else{
	echo 'Tipo nao encontrado!';
	dbd($_REQUEST);
}



function logar(){
	global $conn;
	if($_POST['s_email'] && $_POST['s_senha']){
		$senha = $_POST['s_senha'];
		$email = $_POST['s_email'];
		$sql = "SELECT * FROM TB_USUARIO WHERE S_EMAIL = '$email' AND S_SENHA = '$senha'";
		$result = $conn->query($sql);
		$user = mysqli_fetch_assoc($result);
		$co_user = $user['CO_SEQ_USUARIO'];
		$user['excursoes_minhas'] = listarExcursoesMinhas($co_user);
		$user['excursoes_novas'] = listarExcursoesNovas($co_user);
		$user['excursoes_participando'] = listarExcursoesParticipando($co_user);
		$user['chats'] = listarChats($co_user);
		dbd($user);
		return json_encode($user);
	}else{
		echo "Dados invalidos";
                	dbd($_REQUEST);

	}
}
function cadastrarUsuario(){
 global $conn;
 if($_POST['s_cidade'] && $_POST['s_estado'] && $_POST['s_nome'] && $_POST['s_sobrenome'] && $_POST['s_email'] &&
  $_POST['s_senha'] && $_POST['dt_nascimento'] && $_POST['s_rg'] && $_POST['s_cpf']){

  $cidade = $_POST['s_cidade'];
  $estado = $_POST['s_estado'];
  $nome = $_POST['s_nome'];
  $sobrenome = $_POST['s_sobrenome'];
  $email = $_POST['s_email'];
  $senha = $_POST['s_senha'];
  $dtNasc = $_POST['dt_nascimento'];
  $rg = $_POST['s_rg'];
  $cpf = $_POST['s_cpf'];

  $sql = "INSERT INTO TB_CIDADE(S_ESTADO, S_NOME) VALUES ('$estado','$cidade')";
  $conn->query($sql);
  $co_cidade = $conn->insert_id;
  $sql = "INSERT INTO TB_USUARIO (CO_CIDADE, S_NOME, S_SOBRENOME, S_EMAIL, S_SENHA, DT_NASCIMENTO, S_RG, S_CPF)".
   "VALUES ($co_cidade, '$nome', '$sobrenome', '$email', '$senha', '$dtNasc', '$rg', '$cpf')";

  return json_encode($conn->query($sql));
 } else{
  echo "Dados invalidos";

        }
}

function cadastrarExcursao(){
	global $conn;
	if($_POST['s_nome'] && $_POST['co_usuario'] && $_POST['f_preco']){

		$nome = $_POST['s_nome'];
		$user = $_POST['co_usuario'];
		$valor = $_POST['f_preco'];

		$sql = "INSERT INTO TB_EXCURSAO (S_NOME, CO_USUARIO, F_PRECO)".
			"VALUES ('$nome', $user, $valor);";

		$conn->query($sql);
		$co_excursao = $conn->insert_id;

		$sql = "INSERT INTO TB_CHAT (CO_USUARIO, CO_EXCURSAO, S_NOME)".
			"VALUES (NULL, $co_excursao, NULL);";

		$conn->query($sql);

		if(!$conn->query($sql)){
			$retorno = 'FALSE';
		}

		return $retorno;
	}else{
		return "Dados invalidos";
	}
}

function getExcursao(){

};

function listarExcursoesNovas($co_usuario){
	global $conn;
	$sql = "SELECT * FROM TB_EXCURSAO WHERE CO_SEQ_EXCURSAO NOT IN (SELECT CO_EXCURSAO FROM TB_PARTICIPA_EXCURSAO WHERE CO_USUARIO = $co_usuario);";
	return mysqli_fetch_assoc($conn->query($sql));
}

function listarExcursoesParticipando($co_usuario){
	global $conn;
	$sql = "SELECT * FROM TB_EXCURSAO WHERE CO_SEQ_EXCURSAO IN (SELECT CO_EXCURSAO FROM TB_PARTICIPA_EXCURSAO WHERE CO_USUARIO = $co_usuario);";
	return mysqli_fetch_assoc($conn->query($sql));
}

function listarExcursoesMinhas($co_usuario){
	global $conn;
	$sql = "SELECT * FROM TB_EXCURSAO WHERE CO_USUARIO = $co_usuario;";
	return mysqli_fetch_assoc($conn->query($sql));
}

function listarChats($co_usuario){
	global $conn;
	$sql = "SELECT * FROM TB_CHAT WHERE CO_SEQ_CHAT IN (SELECT CO_CHAT FROM TB_CHAT_USUARIO WHERE CO_USUARIO = $co_usuario);";
	return mysqli_fetch_assoc($conn->query($sql));
}

function queryToJson($result){
	$rows = array();
	while($r = mysqli_fetch_assoc($result)) {
	    $rows[] = $r;
	}
	return json_encode(mysqli_fetch_assoc($result));
}

function db($a){
	echo '<pre>';
	var_dump($a);
	echo '</pre>';
}

function dbd($a){
	db($a);
	die();
}