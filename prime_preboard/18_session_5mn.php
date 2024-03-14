<?php

session_start();
$_SESSION["username"] = "John";

if(!isset($_SESSION["start_time"])){
    $_SESSION["start_time"] = time();
}

echo $_SESSION["start_time"];
echo $_SESSION["username"];

if(time() - $_SESSION["start_time"] > 300){
    session_unset();
    session_destroy();

    echo "Session expired. Please refresh the page.";
}else{
    echo "Session is active.";
}


?>