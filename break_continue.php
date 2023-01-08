<?php

    $paises = array(
        'España', 'Mexico', 'Colonbia', 'Francia',
        'Inglaterra'
    );

    foreach($paises as $pais){
        if($pais == 'España'){
            continue;
        }
        echo $pais . '<br/>';

        if($pais == 'Colonbia'){
            break;
        }
    }

?>