<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="resources/css/ead.css" type="text/css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css" type="text/css">
	<script src="resources/js/bootstrap.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<header>
</header>
<body>
<div class="container">
	<form action="" class="form-horizontal" method="post">
		<fieldset>
			<legend>Adicionar Usuário</legend>
			<div class="panel-group" id="accordion">
				<div class="panel panel-primary">
					
					<div class="panel-heading">
						<h2 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapsePersonal">
								Informações Pessoais
							</a>
						</h2>
					</div>
					<div class="panel-collapse collapse in" id="collapsePersonal">
					<div class="panel-body">

						<!-- Nome -->

						<div class="form-group has-feedback has-feedback-left">
							<div class="col-md-10 col-sm-offset-1">
			    				<i class="form-control-feedback glyphicon glyphicon-user"></i>
			    				<input type="text" class="form-control" placeholder="Nome" name="nome" />
							</div>
						</div>

						<!-- Endereço -->

						<div class="form-group has-feedback has-feedback-left">
							<div class="col-md-10 col-sm-offset-1">
			    				<i class="form-control-feedback glyphicon glyphicon-ok"></i>
			    				<input type="text" class="form-control" placeholder="Endereço" name="endereco" />
							</div>
						</div>

						<div class="form-group has-feedback has-feedback-left">
							
							<!-- Formação -->

							<div class="col-md-5 col-sm-offset-1">
			    				<i class="form-control-feedback glyphicon glyphicon-ok"></i>
			    				<input type="text" class="form-control" placeholder="Formação" name="formacao" />
							</div>
							
							<!-- Titulação -->

							<div class="col-md-5">
			    				<i class="form-control-feedback glyphicon glyphicon-ok"></i>
			    				<input type="text" class="form-control" placeholder="Titulação" name="titulacao" />
							</div>
						</div>

						<div class="form-group has-feedback has-feedback-left">
							
							<!-- CPF -->

							<div class="col-md-5 col-sm-offset-1">
			    				<i class="form-control-feedback glyphicon glyphicon-ok"></i>
			    				<input type="text" class="form-control" placeholder="CPF" name="cpf" />
							</div>
							
							<!-- RG -->

							<div class="col-md-5">
			    				<i class="form-control-feedback glyphicon glyphicon-ok"></i>
			    				<input type="text" class="form-control" placeholder="RG" name="rg" />
							</div>
						</div>

						<!-- E-mail -->

						<div class="form-group has-feedback has-feedback-left">
							<div class="col-md-10 col-sm-offset-1">
			    				<i class="form-control-feedback glyphicon glyphicon-ok"></i>
			    				<input type="text" class="form-control" placeholder="E-mail" name="email" />
							</div>
						</div>

						<div class="form-group has-feedback has-feedback-left">
							
							<!-- Login -->

							<div class="col-sm-4 col-sm-offset-1">
			    				<i class="form-control-feedback glyphicon glyphicon-ok"></i>
			    				<input type="text" class="form-control" placeholder="Login" name="login" />
							</div>
							
							<!-- Senha -->

							<div class="col-sm-3">
			    				<i class="form-control-feedback glyphicon glyphicon-ok"></i>
			    				<input type="password" class="form-control" placeholder="Senha" name="senha" />
							</div>

							<!-- Confirmar Senha -->
							
							<div class="col-sm-3">
			    				<i class="form-control-feedback glyphicon glyphicon-ok"></i>
			    				<input type="password" class="form-control" placeholder="Confirmar Senha" name="confirmar_senha" />
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-primary">
				
				<div class="panel-heading">
					<h2 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseEad">
							Gerenciamento EAD
						</a>
					</h2>
				</div>
				<div class="panel-collapse collapse in" id="collapseEad">
				<div class="panel-body">
					<div class="form-group has-feedback has-feedback-left">
						
						<!-- Perfil de Usuário -->

						<div class="col-md-5 col-sm-offset-1">
		    				<i class="form-control-feedback glyphicon glyphicon-ok"></i>
		    				<input type="text" class="form-control" placeholder="Perfil de Usuário" name="perfil" />
						</div>
						
						<!-- Programa Relacionado -->

						<div class="col-md-5">
		    				<i class="form-control-feedback glyphicon glyphicon-ok"></i>
		    				<input type="text" class="form-control" placeholder="Programa Relacionado" name="programa" />
						</div>
					</div>
				</div>
				</div>
				</div>
			</div>
		</fieldset>
		<button class="btn btn-lg btn-primary" id="salvar" name="salvar">Salvar</button>
	</form>
</div>
<footer>
	
</footer>
</body>
</html>