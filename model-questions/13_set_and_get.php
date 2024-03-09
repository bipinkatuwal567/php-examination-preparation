<?php
setcookie("user", "forest", time() + 3600);

if(isset($_COOKIE["user"])){
    $username = $_COOKIE["user"];
    echo "This name of the user is $username";
}else{
    echo "There is not cookie set";
}
?>