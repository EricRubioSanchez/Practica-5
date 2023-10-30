<?php
$file = pathinfo($_SERVER['PHP_SELF'])['filename'];
    
$indexActive = $file == "index.vista" ? "active" : "";
$canviarContrasenyaActive = $file== "canviarContrasenya.vista" ? "active" : "";
$enregistrarseActive = $file == "enregistrarse.vista" ? "active" : "";
$enviarCorreuActive = $file == "enviarCorreu.vista" ? "active" : "";
$esborrarActive = $file == "esborrar.vista" ? "active" : "";
$inserirActive = $file == "inserir.vista" ? "active" : "";
$logarseActive = $file == "logarse.vista" ? "active" : "";
$modificarActive = $file == "modificar.vista" ? "active" : "";
$meusArticlesActive = $file == "meusArticles.vista" ? "active" : "";
?>