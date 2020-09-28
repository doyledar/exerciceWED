<?php
/*
  ./noyau/contantes.php
  Constantes du framework
 */


  $url = explode('index.php', $_SERVER['SCRIPT_NAME']);
  define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $url[0]);
  define('BASE_URL_ADMIN', 'http://' . $_SERVER['HTTP_HOST'] . $url[0]);
