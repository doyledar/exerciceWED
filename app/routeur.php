<?php
/*----------------------------------------
..app/routeur.php
Routeur principal
--------------------------------------------*/
/*
  CHARGEMENT DU ROUTEUR DES USERS
  PATTERN: index.php?users=xxx
*/
if (isset($_GET['users'])):
  include_once '../app/routeurs/users.php';

/* DETAILS D'UNE CATEGORIE
   PATTERN: ?categorieID=x
   CTRL: categoriesControleur
   ACTION: show
   */
  elseif (isset($_GET['categorieID'])):
    include_once '../app/controleurs/categoriesControleur.php';
    \App\Controleurs\CategoriesControleur\showAction($connexion, $_GET['categorieID']);


/* DETAILS D'UN POST
   PATTERN: ?postID=x
   CTRL: postsControleur
   ACTION: show
   */
  elseif (isset($_GET['postID'])):
    include_once '../app/controleurs/postsControleur.php';
    \App\Controleurs\PostsControleur\showAction($connexion, $_GET['postID']);


/*
  ROUTE PAR DEFAUT
  PATTERN : /
  CTRL : postsControleur
  ACTION : index
 */
 else :
   include_once '../app/controleurs/postsControleur.php';
   \App\Controleurs\PostsControleur\indexAction($connexion);

endif;
