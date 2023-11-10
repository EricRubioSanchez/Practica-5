<!-- Eric Rubio Sanchez -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <script defer src="../Controlador/dropdown.js"></script>   
	<link rel="stylesheet" href="../Estils/estils.css"> <!-- feu referència al vostre fitxer d'estils -->
    <link rel="stylesheet" href="../Estils/estilForms.css"> <!-- feu referència al vostre fitxer d'estils -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<title>Log-IN</title>



</head>
<body>
    
    <?php require_once'../Vista/navbar.vista.php';
    include '../vendor/hybridauth/src/autoload.php'; ?>

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
            <br>
            
            <?php 
            if(!isset($_SESSION["contrasenyaErronea"])){session_start();}
            
            if(isset($_SESSION["contrasenyaErronea"])){
            $contrasenyaErronea= $_SESSION["contrasenyaErronea"];
            }
            if (isset($contrasenyaErronea) && $contrasenyaErronea>=3):?>
                <div class="g-recaptcha" data-sitekey="6LdnHfAoAAAAAO8zdqxXLTWbI-hFsrOb-edlEAUn">
                </div>
            <?php endif ?>
            
            <input type="submit" value="Enviar">
            <a href="../Vista/enviarCorreu.vista.php">Recuperar Contrasenya</a>

            
            <div id="g_id_onload"
                data-client_id="287632858042-td5pnbaha5lmt20i0ruede803qk973c8.apps.googleusercontent.com"
                data-callback="onSignIn">
                
            </div>
            <div class="g_id_signin" data-type="standard"></div>

        </form>
</body>
</html>
<script src="../Controlador/signin.mjs"></script>
<script src="https://accounts.google.com/gsi/client" async defer></script>
