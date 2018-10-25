<?php
/**
 * Created by PhpStorm.
 * User: Balint Sipos
 * Date: 2018. 10. 19.
 * Time: 18:56
 */

function OpenCon()
{
    $dbhost="127.0.0.1";
    $dbuser="root";
    $dbpass="";
    $db ="pet_shelter";

    $conn = new mysqli($dbhost,$dbuser,$dbpass,$db) or die("Connection failed: %s\n". $conn->error);
    return $conn;
}

function CloseCon($conn)
{
    $conn->close();
}
?>