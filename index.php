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

  	



  	<?php
  		$pesquisa = $_POST['busca'] ??'';

  		include "conexao.php";

  		$sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";

  		$dados = mysqli_query($conn, $sql);
  	?>


		<div class="container">
			<div class="row">
				<div class="col">
					<div class="jumbotron">
						<h1 class="display-4">Banco JMJ</h1>
						<hr class="ay-4">
						<nav class="navbar navbar-expand-lg navbar-light">
							<div class="container-fluid">
						<form class="d-flex" action="index.php" method="POST">
							<input class="form-control nr-sm-2" type="search" placeholder="Buscar Cliente" arial-label="Search" name="busca">
							<button class="btn btn-outline-success ny-2 ny-sm-0" type="submit">Pesquisar</button>
						</form>
					</div>
					</nav>
					
					<tr>
						

					</tr>
					<br>
					<div class=".table-responsive">
								
								<table class="table table-hover table-md">
								  <thead class="table-dark">
								  	<tr>
								  		<th scope="col">ID</th>
								  		<th scope="col">Nome</th>
								  		<th scope="col">Idade</th>
								  		<th scope="col">Endereco</th>
								  		<th scope="col">Email</th>
								  	</tr>

								  </thead>
								  <tbody>

								  	<?php
								  		while ($linha = mysqli_fetch_assoc($dados)) {
								  			$id = $linha['id'];
								  			$nome = $linha['nome'];
								  			$idade = $linha['idade'];
								  			$endereco = $linha['endereco'];
								  			$email = $linha['email'];

								  			echo "<tr>
								  							<th scope='row'>$id</th>
								  							<td>$nome</td>
								  							<td>$idade</td>
								  							<td>$endereco</td>
								  							<td>$email</td>
								  							<td width=150px>
								  								<a href='editar.php?cod=$id' class='btn btn-success btn-sm'>Editar</a>
								  								<a href='#' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirma' onclick=" .'"' ."pegar_dados($id, '$nome')" .'"' .">Excluir</a>
								  							</td>
								  			</tr>";
								  		}

								  	?>
								  	
								  </tbody>
								</table>

					</div>
						<a class="btn btn-primary btn-lg" href="cadastro.php" role="button">Adicionar Cliente</a>
					</div>

				</div>
			</div>
		</div>
				
				
		<!-- Modal -->		
			<div class="modal" id="confirma" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      
			      <div class="modal-header">
			        <h5 class="modal-title">Confirmacao de Exclusao</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
			        </button>
			      </div>
			      
			      <div class="modal-body">
			      		<form action="excluir_script.php" method="POST">
			        			<p>Deseja realmente EXCLUIR <b id="nome_pessoa">Nome pessoa</b>?</p>
			      </div>
			      <div class="modal-footer">
				        	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NAO</button>
				        	<input type="hidden" name="nome" id="nome_pessoa_0" value="">
				        	<input type="hidden" name="id" id="cod" value="">
				        	<input type="submit" class="btn btn-danger" data-bs-dismiss="modal" value="SIM">
			        </form>
			      </div>
			    
			    </div>
			  </div>
			</div>	


			<script type="text/javascript">
				function pegar_dados(id, nome) {
					document.getElementById('nome_pessoa').innerHTML = nome;
					document.getElementById('nome_pessoa_0').value = nome;
					document.getElementById('cod').value = id;
				}


			</script>	
				
				
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