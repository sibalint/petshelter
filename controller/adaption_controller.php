<?php
/**
 * Created by PhpStorm.
 * User: sypy
 * Date: 2018. 10. 24.
 * Time: 15:25
 */

$pet_id=$pet_name="";
$name=$phone=$postal_code=$city=$street=$house_number=$comment="";
$nameErr=$phoneErr=$postal_codeErr=$cityErr=$streetErr=$house_numberErr=$commentErr="";
$message="";

//Request arrive from select pet page
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["id"]) && isset($_POST["name"])) {
    if (!empty($_POST["id"]))   $pet_id = $_POST["id"];
    if (!empty($_POST["name"])) $pet_name = $_POST["name"];
}

//Request arrive from this page submit button
if($_SERVER["REQUEST_METHOD"]=="POST" && !isset($_POST["id"])) {

    //Input validation
    $valid=true;

    //Empty Validation
    if (empty($_POST["pet_id"]))      {$idErr = "pet id is missing"; $valid=false;}                  else {$pet_id = $_POST["pet_id"];}

    if (empty($_POST["name"]))        {$nameErr = "name is required"; $valid=false;}                 else {$name = $_POST["name"];}
    if (empty($_POST["phone"]))       {$phoneErr = "phone is required"; $valid=false;}               else {$phone = $_POST["phone"];}
    if (empty($_POST["city"]))        {$cityErr = "city is required"; $valid=false;}                 else {$city = $_POST["city"];}
    if (empty($_POST["street"]))      {$streetErr = "street is required"; $valid=false;}             else {$street = $_POST["street"];}
    if (empty($_POST["house_number"])){$house_numberErr = "house number is required"; $valid=false;} else {$house_number = $_POST["house_number"];}

    if (isset($_POST["comment"]))     {$comment = $_POST["comment"];}

    //postal code validation
    if (empty($_POST["postal_code"])) {$postal_codeErr = "postal_code is required"; $valid=false;}
    elseif (strlen($_POST["postal_code"])!=4){$postal_codeErr = "please use 4 length postal code"; $valid=false;}
    else $postal_code = $_POST["postal_code"];

    //Add to database
    if($valid) {
        include 'DAO/db_queries.php';
        $message=insertAdoption($pet_id, $name, $phone, $postal_code, $city, $street, $house_number, $comment);
    }else
        $message="Please use valid inputs..";
}
?>