<?php 

include 'conecta_mysqlhospeda.inc';

$acao  = $_POST['acao'];
		$foto_atual	= $_POST['foto_atual'];
		$id_hospeda  = $_POST['id_hospeda'];
		$nome_hospeda  = $_POST['nome_hospeda'];
		$cnpj = $_POST['cnpj'];
		$cel_hospeda = $_POST['cel_hospeda'];
		$email_hospeda = $_POST['email_hospeda'];
		$endereco_hospeda = $_POST['endereco_hospeda'];
		$bairro_hospeda = $_POST['bairro_hospeda'];
		$cidade_hospeda = $_POST['cidade_hospeda'];
		$estado_hospeda = $_POST['estado_hospeda'];
		$cep_hospeda = $_POST['cep_hospeda'];
		$user_hospeda = $_POST['user_hospeda'];
		$senha_hospeda = $_POST['senha_hospeda'];
		$habilidadades_hospeda = $_POST['habilidadades_hospeda'];
		$mensagem_hospeda = $_POST['mensagem_hospeda'];

$sql = "INSERT INTO usuario_hospeda VALUES";
$sql .= "('$foto_atual','$id_hospeda', '$nome_hospeda', '$cnpj', '$cel_hospeda','$email_hospeda','$endereco_hospeda', '$bairro_hospeda', '$cidade_hospeda', '$estado_hospeda', '$cep_hospeda', '$user_hospeda','$senha_hospeda', '$habilidadades_hospeda', '$mensagem_hospeda')";

if ($conexao->query($sql) === TRUE) {
	echo  "Usuário incluído com sucesso!";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

