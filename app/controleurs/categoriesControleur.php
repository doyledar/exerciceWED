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
