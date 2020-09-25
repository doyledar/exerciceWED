<?php
/*
  ./noyau/fonctions.php
  Fonctions bien utiles pour notre framework
 */
namespace Noyau\Fonctions;

/**
 * Fonction de slugification à la volée
 * @param  string $str [description]
 * @return string      [description]
 */
 function slugify(string $str) :string {
    return trim(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), strtolower($str)), '-');
  }

  /**
   * tronquer une chaîne au premier espace
   * après un certain nombre de caractères
   * @param  string  $chaine
   * @param  integer $nbreCaracteres [valeur par défaut]
   * @return string
   */
  function tronquer(string $chaine, int $nbreCaracteres = 200) :string {
    if(strlen($chaine) > $nbreCaracteres):
      $positionEspace = strpos($chaine, ' ', $nbreCaracteres);
      return substr($chaine, 0, $positionEspace);
    else:
      return $chaine;
    endif;
  }
