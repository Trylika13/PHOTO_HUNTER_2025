<?php
namespace App\Controllers\photographersController;

use \App\Models\PhotographersModel;
use \PDO;

function indexAction(PDO $connexion) {
    include '../app/models/photographersModel.php';
    $photographers = PhotographersModel\findAll($connexion);
    global $content;
ob_start();
include '../app/views/photographers/index.php';
$content = ob_get_clean();
};

function showAction(PDO $connexion, int $id){
    include '../app/models/phtographersModel.php';
    $photographers = PhotographersModel\findOneByID($connexion, $id);
    global $content;

    ob_start();
    include'../app/views/photographers/show.php';
    $content = ob_get_clean();
}