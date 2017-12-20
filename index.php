
<?php


$current_page = isset($_GET['action'])?$_GET['action']:'home';

switch ($current_page) {
    case 'gallary':
        include 'menu.php';
        include 'gallary.php';
        break;

        case 'anthems':
        include 'menu.php';
        include 'anthems.php';
        break;
    
        case 'home':
        include 'home.php';
        break;
}
?>