<?php
// include('include_global.php');
// include('include_local.php');

if( isset($_GET['depart'])  && isset( $_GET['arret']) ){
    if($_GET['depart'] == 'manzel_jemil' && $_GET['arret'] == 'manzel_abd_rahmen'){
        include_once('mjemil.php');
        include_once('mabdrahmen.php');

        echo '<br><h1>Distance 7 km </h1>';
        echo '<br><h1>depart bus 12:00h</h1>';
        echo '<br><h1>localisation en temps reel</h1>';
    }
    elseif($_GET['depart'] == 'manzel_jemil' && $_GET['arret'] == 'manzel_bourgiba'){
        include_once('mjemil.php');
        include_once('manzel_bougiba.php');

        echo '<br><h1>Distance 24 km </h1>';
        echo '<br><h1>depart bus 12:00h</h1>';
        echo '<br><h1>localisation en temps reel</h1>';
        
    }
    elseif($_GET['depart'] == 'manzel_jemil' && $_GET['arret'] == 'ras_jbal'){
        include_once('mjemil.php');
        include_once('rasjbal.php');

        echo '<br><h1>Distance 19 km </h1>';
        echo '<br><h1>depart bus 12:00h</h1>';
        echo '<br><h1>localisation en temps reel</h1>';
        
    }
    elseif($_GET['depart'] == 'manzel_abd_rahmen' && $_GET['arret'] == 'manzel_jemil'){
        include_once('mabdrahmen.php');
        include_once('mjemil.php');
        
        echo '<br><h1>Distance 7 km </h1>';
        echo '<br><h1>depart bus 12:00h</h1>';
        echo '<br><h1>localisation en temps reel</h1>';
    }
    elseif($_GET['depart'] == 'manzel_abd_rahmen' && $_GET['arret'] == 'manzel_bourgiba'){
        include_once('mabdrahmen.php');
        include_once('manzel_bougiba.php');

        echo '<br><h1>Distance 30 km </h1>';
        echo '<br><h1>depart bus 12:00h</h1>';
        echo '<br><h1>localisation en temps reel</h1>';
        
    }
    elseif($_GET['depart'] == 'manzel_abd_rahmen' && $_GET['arret'] == 'ras_jbal'){
        include_once('mabdrahmen.php');
        include_once('rasjbal.php');

        echo '<br><h1>Distance 27 km </h1>';
        echo '<br><h1>depart bus 12:00h</h1>';
        echo '<br><h1>localisation en temps reel</h1>';
        
    }
    elseif($_GET['depart'] == 'manzel_bourgiba' && $_GET['arret'] == 'manzel_abd_rahmen'){
        include_once('manzel_bougiba.php');
        include_once('mabdrahmen.php');

        echo '<br><h1>Distance 30 km </h1>';
        echo '<br><h1>depart bus 12:00h</h1>';
        echo '<br><h1>localisation en temps reel</h1>';
    }
    elseif($_GET['depart'] == 'manzel_bourgiba' && $_GET['arret'] == 'manzel_jemil'){
        include_once('manzel_bougiba.php');
        include_once('mjemil.php');

        echo '<br><h1>Distance 24 km </h1>';
        echo '<br><h1>depart bus 12:00h</h1>';
        echo '<br><h1>localisation en temps reel</h1>';
        
    }
    elseif($_GET['depart'] == 'manzel_bourgiba' && $_GET['arret'] == 'ras_jbal'){
        include_once('manzel_bougiba.php');
        include_once('rasjbal.php');

        echo '<br><h1>Distance 41 km </h1>';
        echo '<br><h1>depart bus 12:00h</h1>';
        echo '<br><h1>localisation en temps reel</h1>';
        
    }
    elseif($_GET['depart'] == 'ras_jbal' && $_GET['arret'] == 'manzel_abd_rahmen'){
        include_once('rasjbal.php');
        include_once('mabdrahmen.php');

        echo '<br><h1>Distance 27 km </h1>';
        echo '<br><h1>depart bus 12:00h</h1>';
        echo '<br><h1>localisation en temps reel</h1>';
        
    }
    elseif($_GET['depart'] == 'ras_jbal' && $_GET['arret'] == 'manzel_jemil'){
        include_once('rasjbal.php');
        include_once('mjemil.php');

        echo '<br><h1>Distance 19 km </h1>';
        echo '<br><h1>depart bus 12:00h</h1>';
        echo '<br><h1>localisation en temps reel</h1>';
        
    }
    elseif($_GET['depart'] == 'ras_jbal' && $_GET['arret'] == 'manzel_bourgiba'){
        include_once('rasjbal.php');
        include_once('manzel_bougiba.php');

        echo '<br><h1>Distance 41 km </h1>';
        echo '<br><h1>depart bus 12:00h</h1>';
        echo '<br><h1>localisation en temps reel</h1>';
        
    }
    else{
        echo '<h2>the desired way is null you can not put distance equal 0 </h2><a href="https://tet-hackathon.web.app">&nbsp back to main</a>' ; 
    }
}


?>