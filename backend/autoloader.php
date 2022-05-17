<?php

/* Hieronder bevind zich de functie met de naam autoload. 
   De functie zorgt ervoor dat de clasess in de bestand class worden geladen. 
   In andere bestanden door middel van regel inplaats van elkeer een instatie te maken in een andere bestand.*/

function autoload($class)
{

    require 'class/' . $class . '.php';
}

spl_autoload_register('autoload');


$projectIns = new Project();

$dienstenIns = new Diensten();

$projecten_dienstenIns = new Projecten_Diensten();

$categorieIns = new Categorie();

$categorie_projcetenIns = new Categoriee_projecten();

$schermafbeeldingIns = new Schermafbeeldingen();
 

?> 