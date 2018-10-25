<?php
/**
 * Created by PhpStorm.
 * User: sypy
 * Date: 2018. 10. 24.
 * Time: 19:09
 */

include 'db_connection.php';

function getAdoptedPets($species){
    $speciesWhere="";
    if($species=="dog")$speciesWhere=" AND species = 'dog'";
    elseif($species=="cat")$speciesWhere=" AND species = 'cat'";
    return getPets("WHERE adopter_id  IS NOT NULL".$speciesWhere);
}

function getNonAdoptedPets($species){
    $speciesWhere="";
    if($species=="dog")$speciesWhere=" AND species = 'dog'";
    elseif($species=="cat")$speciesWhere=" AND species = 'cat'";
    return getPets("WHERE adopter_id IS NULL".$speciesWhere);
}



function getPets($where)
{
    $sql="SELECT * FROM `pets` ".$where;
    $table=array();
    $db = OpenCon();

    if($result = $db->query($sql)){
            while($row=$result->fetch_object()){
                array_push($table,$row);
            }

        $result->free();
    }
    CloseCon($db);
    return $table;
}

function insertPet($name, $birth, $recording_date, $species, $chip_id, $hair_color, $comment){
    $db = OpenCon();
    $insert = "INSERT INTO `pets`(`name`, `birth`, `recording_date`, `species`, `chip_id`, `hair_color`, `comment`) 
             VALUES ('" . $name . "','" . $birth . "','" . $recording_date . "','" . $species . "','" . $chip_id . "','" . $hair_color . "','" . $comment . "')";

    if ($db->query($insert)) {$message= "Successful save";} else {$message=  "Saving error";}

    CloseCon($db);
    return $message;
}

function deletePet($id){
    $db = OpenCon();
    $sql = "DELETE FROM `pets` WHERE `id`=".$id;

    if ($db->query($sql)) {$message= "Successful delete";} else {$message= "Delete error";}

    CloseCon($db);
    return $message;
}

function updatePet($id, $name, $birth, $recording_date, $species, $chip_id, $hair_color, $comment){
    $db = OpenCon();
    $sql = "UPDATE `pets` 
            SET `name`='".$name."',
                `birth`='".$birth."',
                `recording_date`='".$recording_date."',
                `species`='".$species."',
                `chip_id`='".$chip_id."',
                `hair_color`='".$hair_color."',
                `comment`='".$comment."'
            WHERE `id`='".$id."'";

    if ($db->query($sql)) {$message= "Successful update". $sql;} else {$message= "Update Error";}

    CloseCon($db);
    return $message;
}


function insertAdoption($pet_id, $name, $phone, $postal_code, $city, $street, $house_number, $comment){
    $db = OpenCon();
    $insert = "INSERT INTO `adopters`(`name`, `phone`, `postal_code`, `city`, `street`, `house_number`, `comment`) 
               VALUES ('".$name."', '".$phone."', '".$postal_code."', '".$city."', '".$street."', '".$house_number."', '".$comment."')";
    $insertForeignKey ="UPDATE `pets` SET `adopter_id`=(SELECT max(id) FROM adopters) WHERE id=".$pet_id;


    if ($db->query($insert) && $db->query($insertForeignKey)) {$message= "Successful save";} else {$message=  "Saving error";}

    CloseCon($db);
    return $message;
}

function getAdopter($id)
{
    $sql="SELECT * FROM `adopters` WHERE id=".$id;
    $db = OpenCon();

    if($result = $db->query($sql)){
        while($row=$result->fetch_object()){
            $result->free();
            CloseCon($db);
            return $row;
        }

    }
}
?>