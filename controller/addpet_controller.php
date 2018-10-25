<?php
/**
 * Created by PhpStorm.
 * User: sypy
 * Date: 2018. 10. 24.
 * Time: 15:25
 */


$name=$birth=$recording_date=$species=$chip_id=$hair_color=$comment="";
$nameErr=$birthErr=$recording_dateErr=$speciesErr=$chip_idErr=$hair_colorErr=$commentErr="";
$message="";

if($_SERVER["REQUEST_METHOD"]=="POST") {
    //Input validation
    $valid=true;

    if (empty($_POST["name"])) {
        $nameErr = "Name is required"; $valid=false;
    } else {
        $name = $_POST["name"];
    }

    if (empty($_POST["birth"])) {
        $birthErr = "birth is required"; $valid=false;
    } else {
        $birth = $_POST["birth"];
    }

    if (empty($_POST["recording_date"])) {
        $recording_dateErr = "recording_date is required"; $valid=false;
    } else {
        $recording_date = $_POST["recording_date"];
    }

    if (empty($_POST["species"])) {
        $speciesErr = "species is required"; $valid=false;
    } else {
        $species = $_POST["species"];
    }

    if (empty($_POST["chip_id"]) &&$species=="dog") {
        $chip_idErr = "Chip id is required for a dog"; $valid=false;
    } elseif (strlen($_POST["chip_id"]) > 50) {
        $chip_idErr = " Chip id length is grater than 50 characters"; $valid=false;
    } else {
        $chip_id = $_POST["chip_id"];
    }

    if (empty($_POST["hair_color"])) {
        $hair_colorErr = "hair_color is required"; $valid=false;
    } else {
        $hair_color = $_POST["hair_color"];
    }

    if (isset($_POST["comment"])) {$comment = $_POST["comment"];}

    //Add to database
    if($valid) {
        include 'DAO/db_queries.php';
        $message=insertPet($name, $birth, $recording_date, $species, $chip_id, $hair_color, $comment);
    }else
        $message="Please use valid inputs...";

}
?>