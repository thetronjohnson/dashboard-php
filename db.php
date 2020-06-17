<?php
    $host = "host = 127.0.0.1";
    $port = "port = 5432";
    $dbname = "dbname = fosslab";
    $credentials = "user=root password=root";

    $db = pg_connect("$host $port $dbname $credentials");
    if(!$db){
        echo "Error: unable to create connection to db\n";
    }
?>