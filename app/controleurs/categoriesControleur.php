<?php
/*----------------------------------------------------------------------
../app/controleurs/categoriesControleur.php
Contrôleur des catégories
--------------------------------------------------------------------------*/

namespace App\Controleurs\CategoriesControleur;
use \App\Modeles\CategoriesModele;

function indexAction(\PDO $connexion) {
  // 1. On demande les catégories au modèle et on les met dans $categories
    include_once '../app/modeles/categoriesModele.php';
    $categories = CategoriesModele\findAll($connexion);

  // 2.  Je charge directement la vue
    include '../app/vues/categories/index.php';
}


function showAction(\PDO $connexion, int $id){
  // 1. On demande les posts de la catégorie au modèle et on le met dans $postsCategorie
    include_once '../app/modeles/categoriesModele.php';
    $postsCategorie = CategoriesModele\findAllById($connexion, $id);
    //var_dump($postsCategorie);

  // 2. On charge la vue show dans $content
    GLOBAL $content;
    ob_start();
      include '../app/vues/categories/show.php';
    $content = ob_get_clean();
    //$content = var_dump($postsCategorie);
}
