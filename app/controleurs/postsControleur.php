<?php
/*------------------------------------------------------------------
../app/controleurs/xxxControleur.php
contrôleur de xxx
--------------------------------------------------------------------*/

namespace App\Controleurs\PostsControleur;
use \App\Modeles\PostsModele;

function indexAction(\PDO $connexion){
  // 1. On demande la liste des posts au modèle et on la met dans $posts
    include_once '../app/modeles/postsModele.php';
    $posts = PostsModele\findAll($connexion);
    


  // 2. On charge la vue index dans $content
    GLOBAL $content;
    ob_start();
      include '../app/vues/posts/index.php';
    $content = ob_get_clean();
}
