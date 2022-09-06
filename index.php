<html>
	<head>
		<meta charset="utf-8" />
    	<title>App Mail Send</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>

	<body>

		<div class="container">  

			<div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
				<h2>Send Mail</h2>
				<p class="lead">Seu app de envio de e-mails particular!</p>
			</div>

      		<div class="row">
      			<div class="col-md-12">
  				
					<div class="card-body font-weight-bold">
						<form action="processa_envio.php" method="POST">
							
						<!--Campo nome-->
							<?php
								if (isset($_GET['nome']) and $_GET['nome'] == '') {
							?>
							<div class="form-group">
								<label for="nome">Nome</label>
								<input name="nome" type="text" class="form-control is-invalid" id="para" placeholder="Digite seu nome">
								<div class="invalid-feedback">
									Digite um nome válido
								</div>
							</div>	
							<?php
								} else {
							?>
								<div class="form-group">
									<label for="nome">Nome</label>
									<input name="nome" type="text" class="form-control" id="para" placeholder="Digite seu nome">
								</div>
							<?php
								}
							?>
							<!--Campo Para-->
							<?php
								if (isset($_GET['para']) and $_GET['para'] == '') {
							?>
							<div class="form-group">
								<label for="para">Para</label>
								<input name="para" type="text" class="form-control is-invalid" id="para" placeholder="joao@dominio.com.br">
								<div class="invalid-feedback">
									Digite um destinatário válido
								</div>
							</div>	

							<?php
								} else {
							?>
							<div class="form-group">
								<label for="para">Para</label>
								<input name="para" type="text" class="form-control" id="para" placeholder="joao@dominio.com.br">
							</div>
							<?php
								}
							?>

							<!--Campo Assunto-->
							<?php
								if (isset($_GET['assunto']) and $_GET['assunto'] == '') {
							?>
							
							<div class="form-group">
								<label for="assunto">Assunto</label>
								<input name="assunto" type="text" class="form-control is-invalid" id="assunto" placeholder="Assundo do e-mail">
								<div class="invalid-feedback">
									Digite o assunto
								</div>
							</div>								
							

							<?php
								} else {
							?>

							<div class="form-group">
								<label for="assunto">Assunto</label>
								<input name="assunto" type="text" class="form-control" id="assunto" placeholder="Assundo do e-mail">
							</div>
							<?php
								}
							?>
							<!--Campo mensagem-->
							
							<?php
								if (isset($_GET['msg']) and $_GET['msg'] == '') {
							?>
							
							<div class="form-group">
								<label for="mensagem">Mensagem</label>
								<textarea name="mensagem" class="form-control is-invalid" id="mensagem"></textarea>
								<div class="invalid-feedback">
									Digite uma mensagem
								</div>
							</div>						


							<?php
								} else {
							?>
							<div class="form-group">
								<label for="mensagem">Mensagem</label>
								<textarea name="mensagem" class="form-control" id="mensagem"></textarea>
							</div>
							<?php
								}
							?>

							<?php
							if (isset($_GET['form'])) {
								echo '<p style="color: red">Revise os campos acima</p>';
							}
							?>

							<button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button>
						</form>
					</div>
				</div>
      		</div>
      	</div>

	</body>
</html>