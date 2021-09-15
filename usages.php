<?php

// On crée une pile d'autoload avec le spl_autoload
spl_autoload_register('requireClass');

// On crée une fonction pour faire les require de Classe
function requireClass($classe){
    require $classe . '.php';
}

// création de $billet1
$billet1 = new Billet("titre", "contenu");
var_dump($billet1);

$bdd = new PDO('mysql:host=localhost;dbname=Billetsmiguel;charset=utf8', 'Vg','toto', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$bm = new BilletManager($bdd);
var_dump($bm->getList());

?>