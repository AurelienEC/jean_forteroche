<?php

require '../vendor/autoload.php';
require '../src/controller/controller.php';

try {
    if (isset($_GET['route'])) {
        switch ($_GET['route']) {
            case 'single':
                displaySingle();
                break;
            case 'add_Article':
                displayarticle();
                break;
            case 'add_comment':
                displaycomment();
                break;
            case 'edit_Article':
                updatearticle();
                break;
            default:
                echo 'page inconnue';
                break;
        }
    } else {
        displayHome();
    }
} catch (Exception $e) {
    echo 'Erreur' . $e->getMessage();
}
