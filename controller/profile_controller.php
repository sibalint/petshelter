<?php
include 'DAO/db_queries.php';
if($_SERVER["REQUEST_METHOD"]=="POST" &&isset($_POST["id"])) {
    $profile=getAdopter($_POST["id"]);
    $id = $profile->id;
    $name = $profile->name;
    $phone = $profile->phone;
    $postal_code = $profile->postal_code;
    $city = $profile->city;
    $street = $profile->street;
    $house_number = $profile->house_number;
    if(!empty($profile->comment)) $comment="Comment: <br>".$profile->comment; else $comment="";
}
?>