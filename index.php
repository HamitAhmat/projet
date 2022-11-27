<?php

//die;
require_once("model/bibliotheque.model.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="index.php?view=1">Auteurs</a></li>
            <li><a href="index.php?view=2">Demande de pret</a></li>
            <li><a href="index.php?view=3">Oeuvres disponibles</a></li>
            <li><a href="index.php?view=4">Ouvrages</a></li>
            <li><a href="index.php?view=5">Pret en cours</a></li>
            <li><a href="index.php?view=6">Rayon</a></li>
            <li><a href="index.php?view=7">Exemplaire</a></li>
        </ul>
    </div>
<?php 
if (isset($_GET['view'])){
    //$view=$_GET["view"];
    extract($_GET);
    if($view==1){
        require_once("views/listerauteurouvrage.html.php"); 
    }elseif ($view==2){
        require_once("views/listerdemandedepret.html.php");
    }elseif ($view==3){
        require_once("views/listeroeuvredispo.html.php");
    }elseif ($view==4){
        require_once("views/listerouvrage.html.php");
    }elseif ($view==5){
        require_once("views/listerpretencours.html.php");
    }elseif ($view==6){
        require_once("views/listerrayonouvrage.html.php");
    }elseif ($view==7){
        require_once("views/listerexemplaire.html.php");
    }
}else{
    require_once("views/listerouvrage.html.php");
}

?>
</body>
</html>