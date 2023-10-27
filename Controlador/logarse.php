<?php 
//Eric Rubio Sanchez
require_once("../Model/BDD.php");
require_once("../Controlador/session.php");

/**
 * Summary of validarDades
 *      Aqui comprovem que les dades introduides siguin correctes.
 * @param String $correu el correu del usuari.
 * @param String $password la contrasenya del usuari.
 * @return String retorna un string de errors separats per <br>
 */
function validarDades($correu,$password){
    $errors="";
    if(empty($correu)){
        $errors.="Correu buit <br>";
    }elseif (!filter_var($correu, FILTER_VALIDATE_EMAIL)) {
        $errors.= "Correu erroni <br>";
      }
    if(empty($password)){
        $errors.="Contrasenya buit <br>";
    }
    return $errors;
/*action="<?php echo $_SERVER["PHP_SELF"];?>"id= "form"*/    
}



if ($_SERVER["REQUEST_METHOD"]=="POST"){
    //Agafem les variables del formulari i les enviem a una funcio del controlador en la que tartem d'evitar l'injeccio de codi.

    $correu = tractarDades($_POST["correu"]);
    $password = tractarDades($_POST["password"]);

    //Crida la funcio validarDades on em retorna un string amb tots els erros de les validacions.
    $errors=validarDades($correu,$password);
    $correcte="";

    if($errors==""){
        $correcte="Totes les dades son correctes <br>";
        try{$nom=existeixUsuari($correu);
            $correcte.="Usuari trobat a la base de dades.";
            try{
                if(comprovarContrasenya($correu,$password)){
                    iniciarSession($correu,$nom);
            }else{$errors.= "Contrasenya incorrecte.<br>";}
            }
            catch(Exception $e){
                $errors.= "Contrasenya incorrecte.<br>";
            }
        }catch(Exception $e){
            $errors.= "L'Usuari no existeix a la base de dades.<br>";
        }
        
        

    }
    //Un include perque carregui tot l'HTML desde aqui per tenir les variables i el HTML en el mateix lloc.
}

require_once("../Vista/logarse.vista.php");
?>