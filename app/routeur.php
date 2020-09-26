<?php
/*----------------------------------------
..app/routeur.php
Routeur principal
--------------------------------------------*/

/* DETAILS D'UN POST
   PATTERN: ?postID=x
   CTRL: postsControleur
   ACTION: show
   */
  if (isset($_GET['postID'])):
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
