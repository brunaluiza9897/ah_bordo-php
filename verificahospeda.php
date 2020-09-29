<!DOCTYPE html>
<html>
<head>
	<title>Verifica</title>
	<meta charset="utf-8">
</head>
<body>
		<?php 

		// Recebe os dados enviados pela submissão
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
		$erro =0;

		// Valida os dados recebidos
		$mensagem = '';
		if ($acao == 'editar' && $id == ''):
		    $mensagem .= '<li>ID do registros desconhecido.</li>';

	    // Se for ação diferente de excluir valida os dados obrigatórios
	    if ($acao != 'excluir'):
			if (empty($nome_hospeda) < 10 || strstr($nome_hospeda, ' ') == false)
				{echo "Favor preencher o Nome.<br>"; $erro=1;}
			endif;

			if (empty($cnpj) != 14 ||  strstr($cnpj, ' ') == false)
				{echo "Favor preencher o CNPJ.<br>"; $erro=1;}
			endif;

			if (empty($cel_hospeda) <11  ||  strstr($cel_hospeda, '@') == false)
				{echo "Favor preencher o celular.<br>"; $erro=1;}

			if (empty($email_hospeda) < 10 ||  strstr($email_hospeda, ' ') == false)
				{echo "Favor preencher o e-mail.<br>"; $erro=1;}

			if (empty($endereco_hospeda))
				{echo "Favor preencher o endereço.<br>"; $erro=1;}

			if (empty($bairro_hospeda)) 
				{echo "Favor preencher o bairro.<br>"; $erro=1;}

			if (empty($cidade_hospeda))
				{echo "Favor preencher o cidade.<br>"; $erro=1;}

			if (empty($estado_hospeda) != 2 ||  strstr($estado_hospeda, ' ') == false)
				{echo "Favor preencher o estado.<br>"; $erro=1;}

			if (empty($cep_hospeda) != 8 ||  strstr($cep_hospeda, ' ') == false)
				{echo "Favor preencher o CEP.<br>"; $erro=1;}

			if (empty($user_hospeda) < 5 || strstr($user_hospeda, ' ') == false)
				{echo "Favor preencher o usuário.<br>"; $erro=1;}

			if (empty($senha_hospeda) > 8 ||  strstr($senha_hospeda, ' ') == false)
				{echo "Favor preencher o senha.<br>"; $erro=1;}

			if (empty($habilidades_hospeda) < 100 || strstr($habilidades_hospeda, ' ') == false)
				{echo "Favor preencher o habilidades.<br>"; $erro=1;}

			if (empty($mensagem_hospeda) < 100 || strstr($mensagem_hospeda, ' ') == false)
				{echo "Favor preencher o mensagem.<br>"; $erro=1;}

		// Verifica se foi solicitada a inclusão de dados
		if ($acao == 'incluir'):

			$foto_atual = 'padrao.jpg';
			if(isset($_FILES['foto_atual']) && $_FILES['foto_atual']['size'] > 0):  

				$extensoes_aceitas = array('bmp' ,'png', 'svg', 'jpeg', 'jpg');
			    $extensao = strtolower(end(explode('.', $_FILES['foto_atual']['name'])));

			     // Validamos se a extensão do arquivo é aceita
			    if (array_search($extensao, $extensoes_aceitas) === false):
			       echo "<h1>Extensão Inválida!</h1>";
			       exit;
			    endif;
 
			     // Verifica se o upload foi enviado via POST   
			     if(is_uploaded_file($_FILES['foto_atual']['tmp_name'])):  
			             
			          // Verifica se o diretório de destino existe, senão existir cria o diretório  
			          if(!file_exists("fotos")):  
			               mkdir("fotos");  
			          endif;  
			  
			          // Monta o caminho de destino com o nome do arquivo  
			          $nome_foto = date('dmY') . '_' . $_FILES['foto_atual']['name'];  
			            
			          // Essa função move_uploaded_file() copia e verifica se o arquivo enviado foi copiado com sucesso para o destino  
			          if (!move_uploaded_file($_FILES['foto_atual']['tmp_name'], 'fotos/'.$foto_atual)):  
			               echo "Houve um erro ao gravar arquivo na pasta de destino!";  
			          endif;  
			     endif;  
			else:

			 	$nome_foto = $foto_atual;

			endif;

			$sql = 'INSERT INTO usuario_hospeda
			(
			 id_hospeda,
			 nome_hospeda,			 
			 cnpj, 
			 celular_hospeda,
			 email_hospeda,
			 endereco_hospeda ,
			 bairro_hospeda ,
			 cidade_hospeda,
			 estado_hospeda,
			 cep_hospeda,			 
			 user_hospeda,
			 senha_hospeda,
			 habilidades_hospeda,
			 mensagem_hospeda,
			 foto_atual)
							   VALUES(:id_hospeda, 
								:nome_hospeda,
								:cnpj,
							    :celular_hospeda,
							    :email_hospeda,							     
							     :endereco_hospeda ,
							     :bairro_hospeda ,
							     :cidade_hospeda,
							     :estado_hospeda,
							     :cep_hospeda,
							     :user_hospeda,
							     :senha_hospeda,
							     :habilidades_hospeda,
							     :mensagem_hospeda,
							     :foto_atual)';
			$sql .= 'WHERE id_hospeda = :id_hospeda';

			$stm = $conexao->prepare($sql);
			$stm->bindValue(':nome_hospeda', $nome_hospeda);
			$stm->bindValue(':cnpj', $cnpj);
			$stm->bindValue(':celular_hospeda', $celular_hospeda);
			$stm->bindValue(':email_hospeda', $email_hospeda);
			$stm->bindValue(':endereco_hospeda ', $endereco_hospeda );
			$stm->bindValue(':bairro_hospeda', $bairro_hospeda);
			$stm->bindValue(':cidade_hospeda ', $cidade_hospeda );
			$stm->bindValue(':estado_hospeda', $estado_hospeda);
			$stm->bindValue(':cep_hospeda', $cep_hospeda);
			$stm->bindValue(':user_hospeda ', $user_hospeda);
			$stm->bindValue(':senha_hospeda', $senha_hospeda);
			$stm->bindValue(':habilidades_hospeda ', $habilidades_hospeda );
			$stm->bindValue(':mensagem_hospeda', $mensagem_hospeda);
			$stm->bindValue(':foto', $nome_foto);
			$retorno = $stm->execute();

			// Verifica se foi solicitada a inclusão de dados
		if ($acao == 'incluir'):

			$foto_atual = 'padrao.jpg';
			if(isset($_FILES['foto_atual']) && $_FILES['foto_atual']['size'] > 0):  

				$extensoes_aceitas = array('bmp' ,'png', 'svg', 'jpeg', 'jpg');
			    $extensao = strtolower(end(explode('.', $_FILES['foto_atual']['name'])));

			     // Validamos se a extensão do arquivo é aceita
			    if (array_search($extensao, $extensoes_aceitas) === false):
			       echo "<h1>Extensão Inválida!</h1>";
			       exit;
			    endif;
 
			     // Verifica se o upload foi enviado via POST   
			     if(is_uploaded_file($_FILES['foto_atual']['tmp_name'])):  
			             
			          // Verifica se o diretório de destino existe, senão existir cria o diretório  
			          if(!file_exists("fotos")):  
			               mkdir("fotos");  
			          endif;  
			  
			          // Monta o caminho de destino com o nome do arquivo  
			          $nome_foto = date('dmY') . '_' . $_FILES['foto_atual']['name'];  
			            
			          // Essa função move_uploaded_file() copia e verifica se o arquivo enviado foi copiado com sucesso para o destino  
			          if (!move_uploaded_file($_FILES['foto_atual']['tmp_name'], 'fotos/'.$foto_atual)):  
			               echo "Houve um erro ao gravar arquivo na pasta de destino!";  
			          endif;  
			     endif;  
			else:

			 	$nome_foto = $foto_atual;

			endif;

			if ($retorno):
				echo "<div class='alert alert-success' role='alert'>Registro editado com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao editar registro!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=indexhostel.php'>";
		endif;
		endif;
			//Verifica se não houve erro - neste caso chama a include para inserir os dados
			if ($erro == 0) {
				echo "Todos os dados foram digitados corretamente.<br>";
				include 'inserehospeda.inc';
			}
		?>

	</div>
</body>
</html>