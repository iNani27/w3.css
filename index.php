<?php

/* 
 * Router URLs
 */

 /*** error reporting on ***/
 error_reporting(E_ALL);

 /*** define the site path ***/
 $site_path = realpath(dirname(__FILE__));
 define ('__SITE_PATH', $site_path);

 /*** include the init.php file ***/
 include 'includes/init.php';

 /*** load the router ***/
 $registry->router = new router($registry);

 /*** set the controller path ***/
 $registry->router->setPath (__SITE_PATH . '/controller');

 /*** load up the template ***/
 $registry->template = new template($registry);

 /*** load the controller ***/
 $registry->router->loader();
 
 
/* 
 * Contrôleur Frontal
 */

// on prend notre fichier de config (dépendance)
require 'config/config.php';

// pour nos sessions
session_start();

/*
 * Routage vers les principaux contrôleurs
 */

// si on est simple utilisateur (pas de variable de session 'lelogin' ET qu'on essaye pas de se connecter (lien dans l'url ?connect)
if(!isset($_SESSION['lelogin'])&&!isset($_GET['connect'])){
    // appel du contrôleur spécifique
    require 'controller/visiteurControler.php';
}


// si on essaye de se connecter ou que l'on se déconnecte
if(isset($_GET['connect'])||isset($_GET['deconnect'])){
    // appel du contrôleur de connexion
    require 'controller/connexionControler.php';
}


// si on est connecté
if(isset($_SESSION['lelogin'])){
    // appel du contrôleur d'administration
    require_once 'controller/adminControler.php';
}

?>
