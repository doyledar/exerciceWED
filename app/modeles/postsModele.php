<?php

namespace App\Modeles\PostsModele;

// charge les derniers posts dans la variable $posts
/**
 * [findAll description]
 * @param  PDO   $connexion [description]
 * @return array            [description]
 */
function findAll(\PDO $connexion) : array{
  $sql = "SELECT p.id, p.image, p.created_at, p.title, p.content, a.firstname, a.lastname
          FROM posts p
           JOIN authors a ON p.author_id = a.id
          ORDER BY p.created_at DESC
          LIMIT 10;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

/**
 * [findOneById description]
 * @param  PDO    $connexion [description]
 * @param  int    $id        [description]
 * @return [type]            [description]
 */
function findOneById(\PDO $connexion, int $id) {
  $sql = "SELECT p.id, p.image, p.created_at, p.title, p.content, a.firstname, a.lastname
          FROM posts p
            JOIN authors a ON p.author_id = a.id
          WHERE p.id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}
