<?php
/*------------------------------------------------------------------------------------
../app/routeurs/usersRouteur.php
------------------------------------------------------------------------------------*/
use \App\Controleurs\Users;
include_once '../app/controleurs/usersControleur.php';

switch ($_GET['users']):

case 'loginForm':
  // ROUTE DU DETAIL D'UN POST
  // PATTERN : index.php?users=loginForm
  // CTRL :    usersControleur
  // ACTION:   loginForm
  Users\loginFormAction($connexion);
  break;

case 'login':
  // CONNEXION
  // PATTERN : index.php?users=login
  // CTRL :    usersControleur
  // ACTION:   login
  Users\loginAction($connexion, [
    'login'=>$_POST['login'],
    'password'=>$_POST['password']
  ]);
  break;

endswitch;
