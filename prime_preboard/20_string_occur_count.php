<?php

function count_occurence($str){
    $str = strtolower($str);
    $keyword = "nepal";
    $count = 0;


    for($i=0; $i<strlen($str); $i++){
        if($str[$i] === $keyword[0]){
            $match = true;

            for($j=1; $j<strlen($keyword); $j++){
                if($str[$i + $j] !== $keyword[$j]){
                    $match = false;
                    break;
                }
            }

            if($match){
                $count++;
            }
        }
    }

    return $count;
}

$str = "Nepal is a beautiful country. Nepal is rich in curtural heritage";
echo count_occurence($str);

?>