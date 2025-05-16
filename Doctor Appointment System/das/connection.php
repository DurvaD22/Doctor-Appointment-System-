<?php

    $database= new mysqli("localhost","root","","das");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>