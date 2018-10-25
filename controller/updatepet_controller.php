<?php
$id=$name=$birth=$recording_date=$species=$chip_id=$hair_color=$comment="";
$idErr=$nameErr=$birthErr=$recording_dateErr=$speciesErr=$chip_idErr=$hair_colorErr=$commentErr="";
$checkDogValue=$checkCatValue="";
$message="";

if($_SERVER["REQUEST_METHOD"]=="GET") {
    if (isset($_GET["id"])) $id = $_GET["id"];
    if (isset($_GET["name"])) $name = $_GET["name"];
    if (isset($_GET["birth"])) $birth = $_GET["birth"];
    if (isset($_GET["recording_date"])) $recording_date = $_GET["recording_date"];
    if (isset($_GET["species"])) $species = $_GET["species"];
    if($species=="dog") $checkDogValue='checked="true"'; else $checkCatValue='checked="true"';
    if (isset($_GET["chip_id"])) $chip_id = $_GET["chip_id"];
    if (isset($_GET["hair_color"])) $hair_color = $_GET["hair_color"];
    if (isset($_GET["comment"])) {$comment = $_GET["comment"];}
}

if($_SERVER["REQUEST_METHOD"]=="POST") {
    //Input validation
    $valid=true;

    if (empty($_POST["id"])) {
        $idErr = "Id is required"; $valid=false;
    } else {
        $id = $_POST["id"];
    }

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
        $recording_dateErr = "recording date is required"; $valid=false;
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
        $hair_colorErr = "hair color is required"; $valid=false;
    } else {
        $hair_color = $_POST["hair_color"];
    }

    if (isset($_POST["comment"])) {$comment = $_POST["comment"];}

    //Add to database
    if($valid) {
        include 'DAO/db_queries.php';
        $message=updatePet($id,$name, $birth, $recording_date, $species, $chip_id, $hair_color, $comment);
    }else
        $message="Please use valid inputs...";

}
?>