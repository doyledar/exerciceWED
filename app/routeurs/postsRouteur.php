<?php
/*------------------------------------------------------------------------------------
../app/routeurs/postsRouteur.php
------------------------------------------------------------------------------------*/
use \App\Controleurs\Posts;
include_once '../app/controleurs/postsControleur.php';

switch ($_GET['posts']):

case 'show':
  // ROUTE DU DETAIL D'UN POST
  // PATTERN : indox.php?posts=show&id=x
  // CTRL :    postsControleur
  // ACTION:   show
  Posts\showAction($connexion, $_GET['id']);
  break;

case 'search':
// ROUTE DE RECHERCHE D'UN POST
// PATTERN : index.php?posts=search
// CTRL :    postsControleur
// ACTION:   search
Posts\searchAction($connexion, $_GET['search']);
  break;

endswitch;
