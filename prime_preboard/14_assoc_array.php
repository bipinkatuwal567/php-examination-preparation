<?php

$assocArr = [
    ["Name" => "Bipin", "Age" => 21 ],
    ["Name" => "Kiran", "Age" => 21 ],
    ["Name" => "Anupam", "Age" => 21 ],
    ["Name" => "Govind", "Age" => 23 ],
    ["Name" => "Shudamshu", "Age" => 20 ],
];

    foreach ($assocArr as $person){
        foreach($person as $key => $value){
            echo $key. " " . $value . " ";
        }
        echo "<br>";
    }
?>