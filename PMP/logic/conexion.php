<?php

    $svr = 'Private'
    $dbname = 'Private'
    $username = 'Private'
    $password = 'Private'


function ConectarDB()
{
    try {
        $conn = new PDO("mysql:host=$svr;dbname=$dbname", $username, $password);
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }
}


?>