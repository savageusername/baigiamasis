<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "nft");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_error) {
        echo "Error \n";
        echo 'Error: ' . $mysqli-> connect_error . '\n';
        exit();
    }

    mysqli_query($mysqli, "INSERT INTO draft (name, email)
    VALUES('$_POST[name]', '$_POST[email]')");

    

    
