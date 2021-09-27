<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
  </head>
  <body>
		<div class="container">
			<div class="row">
				<div class="col">
					<h1>Cadastro</h1>
					<form action="banco_script.php" method="POST">
						
						<div class="from.group">
							<label for="nome">Nome Completo</label>
							<input type="text" class="form-control" name="nome" required>
						</div>

						<div class="from.group">
							<label for="idade">Idade</label>
							<input type="int" class="form-control" name="idade" required>
						</div>

						<div class="from.group">
							<label for="endeereço">Endereco</label>
							<input type="text" class="form-control" name="endereco" >
						</div>

						<div class="from.group">
							<label for="email">Email</label>
							<input type="text" class="form-control" name="email" >
						</div>

						<div class="from.group">
							<td><br>
								<input type="submit" class="btn btn-primary">
								<a href="index.php" class="btn  btn-dark">Voltar</a>
							</td>
						</div>

					</form>
					
				</div>
			</div>
		</div>
				
				
				
				
				
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>