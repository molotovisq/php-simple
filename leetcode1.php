<?php

$input = [0,1,0,2,1,0,1,3,2,1,2,1];

function get_water($height) {
    $last_wall = 0;
    $box_list = [];

    foreach ($height as $key=>$wall){
        $box = [];

        echo($last_wall . " > " . $wall . " \n");
        #last_wall começa em 0 e se compara com o próximo elemento do vetor
        if($wall > $last_wall){
            $last_wall = $wall;
            #verifica se á frente tem uma parede
            for($i = $key;  $i < count($height); $i++){

                if($height[$i] == $last_wall){
                    
                    $front_wall = $i;

                    $box_lenght = $front_wall - $key + 1;
                    
                    $box = array_slice($height,$key,$box_lenght);
                    print_r($box);

                    break;
                }else{

                }

            }

        }

        
    }
    //print_r($box_list);
}

get_water($input);
?>
