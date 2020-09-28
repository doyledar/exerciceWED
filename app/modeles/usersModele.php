<?php
/*--------------------------------------------------------------------
../app/modeles/usersModele
modèle des users


LIRE _ AJOUTER _ MODIFIER _ SUPPRIMER A PARTIR D'UN FORMULAIRE (examen)
-----------------------------------------------------------------------*/

namespace App\Modeles\Users;

function findUserByIdPasswd(\PDO $connexion, array $data=null){
  $sql = "SELECT *
          FROM users
          WHERE login = :login
            AND password = :password;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':login', $data['login'], \PDO::PARAM_STR);
  $rs->bindValue(':password', $data['password'], \PDO::PARAM_STR);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}
