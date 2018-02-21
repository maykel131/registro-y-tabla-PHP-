<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scalet=1">

	<link rel="stylesheet" type="" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="" href="estilos.css">
</head>

<body>
  <div class="container">
	  <h2 class="title row" align="center"> Listagem de pessoas </h2>

	  <br>
	  <form>
		   <label name="nome" >Nome</label>
	  	   <input type="text" name="nome">
	  	   <label name="cpf" >CPF</label> 
	  	   <input type="text" name="cpf">	
	  	   <a href="cadastrar.html" >Pesquisar</a>
	  	   <a href="cadastrar.html" >Cadastrar</a>
   	  </form><br>

	  <table class="table table-bordered">
	      <tr>
	        <td id="id">ID</td>
	        <td id="nome">Nome</td>
	        <td id="cpf">CPF</td>
	        <td id="email">E-mail</td>
	      </tr>     	      	
			<?php 
			require("php/conection.php");
			if(mysqli_connect_errno($con)){
 			echo "Erro: " . mysqli_connect_error(); 
			}else{ 
			$sql = "SELECT * FROM pessoa ";
			$resultado = mysqli_query($con,$sql);
			/*echo "<h2>Pessoas</h2>"; */
			while($pessoa = mysqli_fetch_array($resultado)){
	 		echo "<tr><td>".$pessoa['id'] ."</td><td>" . $pessoa['nome']."</td> <td>" . $pessoa['cpf']."</td> <td> ".$pessoa['email']."</td></tr>"; 
			}mysqli_close($con);
			}
			?>
	  </table>
  </div>
	<script src="js/jquery.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
</body>
</html>




