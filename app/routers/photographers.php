<?php 
use \App\Controllers\PhotographersController;

include_once '../app/controllers/photographersController.php';

switch ($_GET['monsters']):
    case 'show': 
        PhotographersController\showAction($connexion, $_GET['id']);
        break;
    default:
    PhotographersController\indexAction($connexion);
        break;

endswitch;