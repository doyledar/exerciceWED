<?php
/*--------------------------------------------------------------------
../app/modeles/categoriesModele
modèle des categories
-----------------------------------------------------------------------*/

namespace App\Modeles\CategoriesModele;

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
