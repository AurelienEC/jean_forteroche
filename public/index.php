<?php


require '../vendor/autoload.php';

require '../src/controller/controller.php';
 
try{
    if(isset($_GET['route']))
    {
        
        if($_GET['route'] === 'single'){
            displaySingle();
        }

        elseif($_GET['route']==='add_Article'){
            displayarticle();
        }

        elseif($_GET['route']==='add_comment'){
            displaycomment();
        }

        elseif ($_GET['route']==='edit_Article'){
            updatearticle();
        }

        else{
            echo 'page inconnue';
        }

    }
    else{
        displayHome();
    }
   
}

catch (Exception $e)
{
    echo 'Erreur'.$e->getMessage();
}


?>