<?php
/*------------------------------------------------------------------
../app/controleurs/usersControleur.php
contrôleur des posts
----------------------------------------------------------------*/

namespace App\Controleurs\Users;
use \App\Modeles\Users;

function loginFormAction(\PDO $connexion) {
  // 2. On charge la vue loginForm dans $content
    GLOBAL $title, $content;
    $title = "Login users";
    ob_start();
      include '../app/vues/users/loginForm.php';
    $content = ob_get_clean();
}

function loginAction(\PDO $connexion, array $data=null){
  // Je demande l'utilisateur qui correspond au login/passwd
  include "../app/modeles/usersModele.php";
  $user = Users\findUserByIdPasswd($connexion, $data);

  if($user):
    $_SESSION['user'] = $user;
    header('location: ' .BASE_URL_ADMIN);
  else:
    header('location: ' . BASE_URL . 'users/login/form');
  endif;

  // Si ok, redirection vers le backoffice, sinon, redirection vers la page de connexion

}
