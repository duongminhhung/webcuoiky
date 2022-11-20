<?php
require 'controller/LopController.php';
$action = $_GET['action'] ?? 'index';
switch ($action) {
    case 'index':
    case 'about':
    case 'products':
    case 'select':
    case 'login':
    case 'signup':
    case 'signin':
    case 'logout':
    case 'contact':
    case 'cart':
    case 'add_cart':
    case 'update_quantity':
    case 'search':
        (new LopController())->$action();
        break;
    default:
    echo "<script>location.href='?action=login';</script>";

        break;
}