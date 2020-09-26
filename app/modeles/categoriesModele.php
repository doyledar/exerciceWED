<?php
/*----------------------------------------------------------------------------
  ../app/modeles/categories/categoriesModele.php
------------------------------------------------------------------------------*/

namespace App\Modeles\CategoriesModele;

// charge les catégories dans la variable $categories
/**
 * [findAll description]
 * @param  PDO   $connexion [description]
 * @return array            [description]
 */
 function findAll(\PDO $connexion){
   $sql = "SELECT c.id, name, count(p.id) as nbr
           FROM categories c
             JOIN posts p
             ON p.categorie_id = c.id
             GROUP BY c.id
           ORDER BY name ASC;";
           $rs = $connexion->query($sql);
           return $rs->fetchAll(\PDO::FETCH_ASSOC);
         }


/**
 * [findAllById description]
 * @param  PDO    $connexion [description]
 * @param  int    $id        [description]
 * @return [type]            [description]
 */
function findAllById(\PDO $connexion, int $id) {
  $sql = "SELECT c.id, c.name as name, c.created_at, p.id as postId, p.title as title, p.image as image
          FROM categories c
            JOIN posts p on p.categorie_id = c.id
          WHERE c.id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
