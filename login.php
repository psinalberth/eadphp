<div class="container-fluid">
	<div class="row vertical-center">
		<div class="col-md-4 col-sm-offset-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Entre com sua credencial</h2>
				</div>
				<div class="panel-body">
					<form role="form" class="form-horizontal">
						<fieldset>
							<div class="form-group has-feedback has-feedback-left">
								<div class="col-md-10 col-sm-offset-1">
				    				<i class="form-control-feedback glyphicon glyphicon-user"></i>
				    				<input type="text" class="form-control" placeholder="Login ou E-mail" />
								</div>
							</div>
							<div class="form-group has-feedback has-feedback-left">
								<div class="col-md-10 col-sm-offset-1">
				    				<i class="form-control-feedback glyphicon glyphicon-lock"></i>
				    				<input type="password" class="form-control" placeholder="Senha" />
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-10 col-sm-offset-1">
									<button class="btn btn-lg btn-success btn-block" onclick="<?php _config('adicionar'); ?>">Login</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>