<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt_BR">

<head>
	<title>Cadastro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="/resources/css/font-awesome-4.min.css">
	<link rel="stylesheet" href="/resources/css/font-awesome-5.min.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous"> -->
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous"> -->
</head>

<body>
	<?php echo $header; ?>
	
	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-3">
				
			</div>
			<div class="col-6 text-center">
				
				<div class="bg-dark text-white p-2" style="border-top-left-radius: 5px;border-top-right-radius: 5px">
					Produto
				</div>
				<form id="form" action="?controller=Produto&action=store" method="POST" class="p-5"
				style="border-radius: 5px; background-color: rgb(240, 240, 240);">
				<input type="hidden" name="id" id="id">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="fa fa-comment" aria-hidden="true"></i>
						</span>
					</div>
					<input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição">
				</div>
				
				<div class="input-group mt-2">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="fas fa-money-bill"></i>
						</span>
					</div>
					<input type="number" min="0" step="0.01" name="preco" id="preco" class="form-control"
					placeholder="Preço">
					
					<div class="input-group-prepend ml-3">
						<span class="input-group-text">
							<i class="fas fa-warehouse    "></i>
						</span>
					</div>
					<input type="number" name="estoque" id="estoque" class="form-control" placeholder="Em estoque">
				</div>
				<input type="submit" value="Salvar" class="btn btn-dark mt-4 w-50">
			</form>
		</div>
		<div class="col-3">
			
		</div>
	</div>
</div>

<script src="/resources/js/popper.min.js"></script>
<script src="/resources/js/bootstrap.min.js"></script>
<script src="/resources/js/jquery.min.js"></script>
<script src="/resources/js/font-awesome-5.js"></script>
<!-- <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script> -->

</body>

</html>