<!--https://www.concatenar.com.br/php/inserindo-dados-de-formulario-atraves-do-php-em-um-banco-de-dados-mysql (usamos o codigo desse site.)-->
<?php
 
include 'conecta_mysqlvianjante.inc';
//aqui eu estou incluindo o documento:conecta_mysqlvianjante.inc
 $id_viajante
		   =$_post['id'];

	  $nome_viajante
	  = $_post['Nome'];

	  $cpf_viajante 
	  =$_post ['CPF'];

	  $cel_viajante
	  = $_post['Celular'];

	  $email_viajante
	  =$_post['Email'];

	  $cidade_viajante
	  =$_post['Cidade'];

	  $data_nasc_viajante
	  =$_post['Data de nascimento'];

	  $usuario_viajante
	   =$_post['Usuario'];

	  $senha_viajante 
	  =$_post['Senha'];

	  $habilidades_viajante
	  =
	   $_post['Habilidades'];

	  $mensagem_viajante
	   =$_post['Mensagem'];

	  $datacad_viajante
	   =$_post['Data do cadastro'];

	  $dataalt_viajante
	   =$_post['Data da alteraçao'];

	  $prive_viajante 
	  =$_post['Privilégio'];
//no insira dentro eu coloquei nas tags todos os dados do nosso banco de dados  
$sql= "INSERT INTO ah_bordo VALUES" ;
$sql.= ('$id_viajante','$nome_viajante',' $cpf_viajante ','$cel_viajante',' $email_viajante','$cidade_viajante','$data_nasc_viajante','$usuario_viajante','$senha_viajante',' $habilidades_viajante','$mensagem_viajante','$datacad_viajante',' $dataalt_viajante',' $prive_viajante');

if ($conexao -> query($sql)===TRUE){
	echo "Usuario incluido com sucesso!";
}
else{
	echo "ERRO:	".$sql."<br>".$conexao-> error;
}

$conexao ->close();