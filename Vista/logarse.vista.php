<!-- Eric Rubio Sanchez -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">  
	<link rel="stylesheet" href="../Estils/estils.css"> <!-- feu referència al vostre fitxer d'estils -->
    <link rel="stylesheet" href="../Estils/estilForms.css"> <!-- feu referència al vostre fitxer d'estils -->
	<title>Log-IN</title>
</head>
<body>
    <nav>
		<ul>
 			<li><a href="../Vista/index.vista.php">Articles</a></li>
  			<li class="logs active"><a href="../Vista/logarse.vista.php">Logar-se</a></li>
			<li class="logs"><a href="../Vista/enregistrarse.vista.php">Enregistrar-se</a></li>
		</ul>
	</nav>
	<form action="../Controlador/logarse.php" method="post">
            <label><h1>Logarse</h1></label>
            <br>
            <label>Correu electronic:
                <input type="email" name="correu" maxlength="30" minlength="4" required value="<?php if(isset($correu)){echo $correu;}?>">
            </label>
            <br>
            <label>Contrasenya:
                <input type="password" name="password" required value="<?php if(isset($password)){echo $password;}?>">
            </label>
            <br>
            <?php if (!empty($errors)):?>
                <div><?php
                    echo "<p class='errors'>".$errors."</p>";
                    ?>
                </div>
            <?php endif ?>
            <?php if (!empty($correcte)):?>
                <div><?php
                    echo "<p class='correcte'>".$correcte."</p>";
                    ?>
                </div>
            <?php endif ?>
            <input type="submit" value="Enviar">
            <a href="../Vista/enviarCorreu.vista.php">Recuperar Contrasenya</a>
        </form>
</body>
</html>