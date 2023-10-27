<!-- Eric Rubio Sanchez -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">  
	<link rel="stylesheet" href="../Estils/estils.css"> <!-- feu referència al vostre fitxer d'estils -->
	<title>Articles</title>
</head>
<body>
	<?php include_once'../Controlador/index.php';
	session_start();?>
	<nav>
		<ul>
			<li class="active"><a href="../Vista/index.vista.php">Articles</a></li>
			<?php if( isset( $_SESSION['newsession'])):?>
				<li ><a href="../Vista/inserir.vista.php">Inserir</a></li>
				<li><a href="../Vista/modificar.vista.php">Modificar</a></li>
				<li ><a href="../Vista/esborrar.vista.php">Esborrar</a></li>
				<li class="logs"><a href="../Controlador/logout.php">Sortir</a></li>
				<li class="logs"><a href="../Vista/canviarContrasenya.vista.php">Canviar Contrasenya</a></li>
				<li class="logs"><?php echo("Hola, ".$_SESSION['nom'] );?></li>
			<?php else: ?>
				<li class="logs"><a href="../Vista/logarse.vista.php">Logar-se</a></li>
				<li class="logs"><a href="../Vista/enregistrarse.vista.php">Enregistrar-se</a></li>
            <?php endif; ?>
		</ul>
	</nav>
	<div class="contenidor">
		<h1>Articles</h1>

		<form action="../Controlador/index.php">
  			<label for="nArticlesPerPagina">Eligeix el nombre de articles per pàgina:</label>
  			<select name="nArticlesPerPagina" id="nArticlesPerPagina">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5" selected="selected">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
			<input type="submit" value="Enviar">
		</form>

		<section class="articles"> <!--aqui guardem els articles-->
			<?php 
			$articles= mostrarPerPagina();
			echo $articles;
			?>
		</section>

		<section class="paginacio"> <!--aqui guardem els botons-->
		<?php 
			$botons= mostrarBotons();
			echo $botons;
			?>
		</section>
	</div>
</body>
</html>