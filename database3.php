<?php
    $db_server = "localhost:3306";
    $db_name = "tour";
    $db_password = "";
    $db_user = "root";
    $conn = "";

    try {
        $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);
    } catch(mysqli_sql_exception){
        echo "";
    }
    
    if($conn){
        echo "";
    }

?>