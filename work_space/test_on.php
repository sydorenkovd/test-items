<?php

    $scan = scandir('/openserver/domains/localhost/test.loc');
    foreach($scan as $file){
        if(is_dir("../".$file)){
            echo $file . ' detected' . "<br>";
        }
    }
//print_r($scan);