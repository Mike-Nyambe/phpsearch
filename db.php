<?php

    $server_name = "localhost";
    $server_user_name = "root";
    $sever_password = "";
    $database_name = "search_field";

    $connection = mysqli_connect($server_name, $server_user_name, $sever_password, $database_name);

    // if(!$connection){
    //     die("COULD NOT CONNECT TO THE DATABASE" . mysqli_error($connection));
    // }

?>