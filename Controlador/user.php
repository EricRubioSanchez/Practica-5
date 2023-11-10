<?php 
require("../Model/BDD.php");

$connection=obrirBDD();

$UserEmail    = isset($_POST["correu"]) ? $_POST["correu"] : null;
$UserName     = isset($_POST["UserName"]) ?  $_POST["UserName"] : null;
$UserAction   =  isset($_POST["UserAction"]) ? $_POST["UserAction"] : null;;

if($UserAction == "login")
{
    //login
    // validate correo existe
    $query = "SELECT * FROM usuaris WHERE correu = '{$correu}'";
    $user = $connection->query($query);
    $UserInfo = $user->fetch(PDO::FETCH_ASSOC);

    if(isset($UserInfo["UserID"]))
    {
        $response["logged"] = true;
        $response["info"]   = $UserInfo;

        session_start();
        setcookie("username", $UserName, false, "/", $_SERVER["HTTP_HOST"]);
    }
    else
    {
        $response["logged"] = false;
    }

    echo json_encode($response);

}

elseif($UserAction == "logout")
{
    setcookie('username', null, 0, '/', $_SERVER["HTTP_HOST"]);
    session_destroy();

}

else
{
    return false;
}

?>