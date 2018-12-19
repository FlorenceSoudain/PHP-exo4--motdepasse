<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 19/12/2018
 * Time: 14:25
 */


$mdp = $_POST["mdp"];
$mdp2 = filter_var($mdp,FILTER_SANITIZE_STRING);

if($mdp2 === "abc"){
    include("page.html");
}
else{
    include("erreur.html");
}
