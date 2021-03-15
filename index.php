<?php
require_once('./Controllers/MainController.php');

$controller = new MainController();

switch ($_GET['action']) {
    case 'home':
        $controller->home();
        break;
    case 'form':
        $controller->form();
        break;
    case 'upload':
        $controller->upload();
        break;
    default:
        $controller->home();
        break;
}
