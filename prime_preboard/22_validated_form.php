<?php
$str = "2002-12-01";

if(preg_match("/^\d{4}-\d{2}-\d{2}$/", $str)){
    echo "It is matched";
}else{
    echo "It is not matched";
}

?>
