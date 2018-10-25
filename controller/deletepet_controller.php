<?php
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["id"])){
    $id=$_POST["id"];
}
$message="";
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["id"]) && isset($_POST["answer"])) {
    if($_POST["answer"]=="yes") {
        include 'DAO/db_queries.php';
        $message = deletePet($id);
    }
}
?>