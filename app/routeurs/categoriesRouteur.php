<?php
/* ---------------------------------------------------------------------------
../app/routeurs/categoriesRouteur.php
-----------------------------------------------------------------------------*/
use \App\Controleurs\Categories;
include_once '../app/controleurs/categoriesControleur.php';

switch ($_GET['categories']):

case 'show':
// ROUTE DU DETAIL D'UNE CATEGORIE
// PATTERN : ?categorie=show&id=x
// CTRL :    categoriesControleur
// ACTION:   show

Categories\showAction($connexion, $_GET['id']);

break;
endswitch;
