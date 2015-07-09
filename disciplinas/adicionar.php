<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
			<legend>Adicionar Disciplina</legend>
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

						<!-- Descrição -->

						<div class="form-group has-feedback has-feedback-left">
							<div class="col-md-10 col-sm-offset-1">
			    				<i class="form-control-feedback glyphicon glyphicon-user"></i>
			    				<textarea class="form-control" placeholder="Descrição" name="descricao"></textarea>
							</div>
						</div>
						
						<!-- Curso -->

						<div class="form-group has-feedback has-feedback-left">
							<div class="col-md-10 col-sm-offset-1">
			    				<i class="form-control-feedback glyphicon glyphicon-user"></i>
			    				<select type="text" class="form-control" placeholder="Curso" name="curso">
									
			    				</select>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</fieldset>
		<button class="btn btn-lg btn-primary">Salvar</button>
	</form>
</div>
<footer>
	
</footer>
</body>
</html>