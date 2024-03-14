<?php

function checkValue($num){
    if($num > 1){
        throw new Exception("Number must be less than 1");
    }
    return;
}

try{
    checkValue(-2);
    echo "If you see this message, the number is less than 1";
}
catch(Exception $e){
    echo "Message: ". $e->getMessage();
}

?>
