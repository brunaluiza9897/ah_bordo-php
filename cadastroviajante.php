<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><!--link para o estilo externo do template-->
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="icon" href="../icones/ahbordo_icone.png">
      <title>Ah Bordo |Cadastro de Usuário</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="../estilos/index.css"><!--link para o estilo da pagina inicial-->
    <link rel="stylesheet" href="../js/index.css"><!--link para o js da pagina inicial-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:800,300" rel="stylesheet" type="text/css"/>
</head>
<body style="background-color:#5880a8;"><!--usamos no backgraud uma cor escura para um design mais bonito-->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card ">
    <a href="../index.html" class="w3-bar-item"><img src="../imagens/ahbordo_logo.png" style="width: 20%;"></a>
   
    <div class="w3-right">
      <a href="../voluntariado.html" class="w3-bar-item w3-button">Bora ajudar?</a>
      <a href="../transporte.html" class="w3-bar-item w3-button">Fui!</a>
      <a href="../mepoupe.html" class="w3-bar-item w3-button">Me poupe!</a>
      <a href="../destinos.html" class="w3-bar-item w3-button">Brota aí!</a>
      <a href="../cadastro.html" class="w3-bar-item w3-button">Cadastro</a>
      <a href="../login.html" class="w3-bar-item w3-button">Login</a>
    </div>
  </div>
</div>
<header></header>
	<div class='container'>
		<fieldset>
			<br>
			<br>
			<form action="verificaviajante.php" method="post" id='form-contato' enctype='multipart/form-data'>
				<div class="row">
					<legend>
						<h1>
							Formulário - Cadastro do viajante 
						</h1>
					</legend>
					<label for="nome">Foto de perfil</label>
			      	<div class="col-md-2">
					    <a href="#" class="thumbnail">
					      <img src="fotos/padrao.jpg" height="190" width="150" id="foto-viajante">
					    </a>
				  	</div>
				  	<input type="file" name="foto" id="foto" value="foto" >
			  	</div>

			    <div class="form-group">
			      <label for="nome">Nome</label>
			      <input type="text" class="form-control" id="nome" name="nome" placeholder="Infome o Nome do viajante">
			      <span class='msg-erro msg-nome'></span>
			    </div>

			    <div class="form-group">
			      <label for="cpf">cpf</label>
			      <input type="cpf" class="form-control" id="cpf" maxlength="14" name="cpf" placeholder="Informe o cpf">
			      <span class='msg-erro msg-cpf'></span>
			    </div>

			    <div class="form-group">
			      <label for="celular">Celular</label>
			      <input type="celular" class="form-control" id="celular" maxlength="13" name="celular" placeholder="Informe o Celular">
			      <span class='msg-erro msg-celular'></span>
			    </div>

			    <div class="form-group">
			      <label for="email">E-mail</label>
			      <input type="email" class="form-control" id="email" name="email" placeholder="Informe o E-mail">
			      <span class='msg-erro msg-email'></span>
			    </div>

			    <div class="form-group">
			      <label for="endereco">usuario</label>
			      <input type="endereco" class="form-control" id="endereco" name="endereco">
			      <span class='msg-erro msg-endereco'></span>
			    </div>

			    <div class="form-group">
			      <label for="data_nasc">Data de nascimento</label>
			      <input type="data_nasc" class="form-control" id="data_nasc" name="data_nasc">
			      <span class='msg-erro msg-data_nasc'></span>
			    </div>

			    <div class="form-group">
			      <label for="usuario">Usuario</label>
			      <input type="usuario" class="form-control" id="usuario" name="usuario">
			      <span class='msg-erro msg-usuario'></span>
			    </div>

			    <div class="form-group">
			      <label for="Senha">Senha</label>
			      <input type="Senha" class="form-control" id="Senha" maxlength="2" name="Senha">
			      <span class='msg-erro msg-Senha'></span>
			    </div>

			    <div class="form-group">
			      <label for="habilidades">Habilidades</label>
			      <input type="habilidades" class="form-control" id="habilidades" maxlength="8" name="habilidades">
			      <span class='msg-erro msg-habilidades'></span>
			    </div>
			    
			    <div class="form-group">
			      <label for="usuario">usuario</label>
			      <input type="usuario" class="form-control" id="usuario" minlength="5" maxlength="30" name="usuario" placeholder="usuario">
			      <span class='msg-erro msg-usuario'></span>
			    </div>


				<input type="hidden" name="acao" value="incluir">
			    <button type="submit" class="btn btn-primary" id='botao'> 
			      Gravar
			    </button>
			    <a href='../verifica.php' class="btn btn-danger">Cancelar</a>
			</form>
		</fieldset>
	</div>
			    
<!-- Rodapé -->
    <link rel="stylesheet" href="../estilos/rodape.css"><!--link para o estilo do rodapé-->
   <section id="footer">
      <div class="container">
         <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
               <img id="logo" src="../imagens/ahbordo_logo.png" style="width: 470px;height: 300px;">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
               <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
               <ul class="list-unstyled list-inline social text-center">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
               </ul>
            </div>
         </div>   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white" style="color: white;font-family: 'Raleway', sans-serif;">
               <p><h6>Ah Bordo com você.</h6></p>
               <p class="h6">© Todos os Direitos reservados. Imagens by<a href="http://www.freepik.com">Freepik Template by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank">w3.css</a></p>
            </div>
         </div>   
      </div>
   </section>
   </div>
   <!-- fim rodapé -->
</body>
</html>
