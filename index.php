<?php
session_start();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

$action = $_GET["action"];

switch ($action) {
    case 'login':
        require 'View\Login.php';
        break;
    default:
    require 'View\Gabarit.html';
}
?>



