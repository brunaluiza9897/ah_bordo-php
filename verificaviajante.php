<!DOCTYPE html>
<html>
<head>
	<!--https://www.concatenar.com.br/php/inserindo-dados-de-formulario-atraves-do-php-em-um-banco-de-dados-mysql (usamos o codigo desse site.)-->
</head>
<body>
  <!--Aqui no incio chamamos cada funcao que esta no banco de dados-->
<?php
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

	  $status_viajante
	  =$_post['Status'];

	  if (empty($id_viajante)or strstr($id_viajante, '')==false) {
           echo "id do viajante.<br>";
           $erro=1;
    }
    if (empty($nome_viajante)or strstr($nome_viajante,'')==false) {
    	echo "Nome do viajante .<br>";
           $erro=1;
    }
    if (empty($cpf_viajante) <11|| strstr($cpf_viajante,'')==false) {
    		echo "CPF do viajante .<br>";
           $erro=1;
    }
     if (empty($cel_viajante)) {
    		echo "Celular do viajante .<br>";
           $erro=1;
    }
    if (strlen( $email_viajante)<8|| strstr( $email_viajante, '@')==false) {
           echo "Email do viajante.<br>";
           $erro=1;
    }
 if (empty($cidade_viajante)) {
    		echo "Cidade do viajante .<br>";
           $erro=1;
    }
     if (empty($data_nasc_viajante)) {
    		echo "Cidade do viajante .<br>";
           $erro=1;
    }
    if (empty( $usuario_viajante) or strstr( $usuario_viajante,'')==false) {
    		echo "Usuario do viajante .<br>";
           $erro=1;
    }
    if (empty(  $senha_viajante ) <200|| strstr(  $senha_viajante ,'')==false) {
    		echo "Senha do viajante .<br>";
           $erro=1;
    }
     if (empty(  $habilidades_viajante)) {
    		echo "Habilidades do viajante .<br>";
           $erro=1;
    }
 if (empty( $mensagem_viajante)) {
    		echo "Mensagem:<br>";
           $erro=1;
    }
 if (empty( $datacad_viajante)) {
    		echo "Data do cadastro do viajante .<br>";
           $erro=1;
    }
     if (empty( $dataalt_viajante)) {
    		echo "Data de alteração do viajante .<br>";
           $erro=1;
    }
     if (empty($prive_viajante )) {
    		echo "Privilegios do viajante .<br>";
           $erro=1;
    }
 if (empty(  $status_viajante )) {
    		echo "status do viajante .<br>";
           $erro=1;
    }
    if ($erro==0) {
    	echo "Todos os dados foram digitados corretamente <br> ";
    	include 'insereviajante.inc'
    }
    ?>
    <!--aqui usamos e se para identificar cada comando  -->
    </body>
</html>