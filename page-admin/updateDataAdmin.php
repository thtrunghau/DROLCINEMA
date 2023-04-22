<?php

    require_once('../utils.php');

    $table = $_POST['table'];
    $value = $_POST['value'];
    $name = $_POST['name'];
    $id = $_POST['id']; 
    $idDatabase = $_POST['idDatabase'];
    $statement = "UPDATE $table SET $name = '$value' WHERE $idDatabase = $id";
    $tmp = getData($statement,0);
    
    echo 1;
?>