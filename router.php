<?php
require 'controller/LopController.php';
$action = $_GET['action'] ?? 'index';
switch ($action) {
    case 'index':
    case 'about':
    case 'products':
    case 'select':
    case 'contact':
    case 'login':
        (new LopController())->$action();
        break;
    default:
        echo "nhap sai action";
        break;
}