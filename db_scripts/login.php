<?php
    $hn = "localhost";
    $un = "root";
    $pw = "";
    $db = "vintage";

    $conn =  mysqli_connect($hn,$un,$pw,$db); // connects to the db table

    if($conn->connect_error)
    {
        die("Server had a problem while connecting");
    }
?>