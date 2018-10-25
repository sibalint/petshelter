<?php
include 'DAO/db_queries.php';
$speciesFilter = "";
if($dogVisible == "active" && $catVisible == "deactive") {$speciesFilter = "dog";}
else if($dogVisible == "deactive" && $catVisible == "active") {$speciesFilter = "cat";}
$pets = getNonAdoptedPets($speciesFilter);

foreach ($pets as $pet) {
    echo '<tr>
                <td id="col">' . $pet->id . '</td>
                <td id="col">' . $pet->name . '</td>
                <td id="col">' . $pet->birth . '</td>
                <td id="col">' . $pet->recording_date . '</td>
                <td id="col">' . $pet->species . '</td>
                <td id="col">' . $pet->chip_id . '</td>
                <td id="col">' . $pet->hair_color . '</td>
                <td id="col">' . $pet->comment . '</td>
                
                <td  id="btn">
                    <form method="POST" action="/adatption.php" >
                        <input type="hidden" name="id" value="' . $pet->id . '">
                        <input type="hidden" name="name" value="' . $pet->name . '">                                
                        <input type="submit" value="Adaption" />
                    </form>
                </td>
                
                <td  id="btn">
                    <form method="GET" action="/update_pet.php" >
                        <input type="hidden" name="id" value="' . $pet->id . '">
                        <input type="hidden" name="name" value="' . $pet->name . '">
                        <input type="hidden" name="birth" value="' . $pet->birth . '">
                        <input type="hidden" name="recording_date" value="' . $pet->recording_date . '">
                        <input type="hidden" name="species" value="' . $pet->species . '">
                        <input type="hidden" name="chip_id" value="' . $pet->chip_id . '">
                        <input type="hidden" name="hair_color" value="' . $pet->hair_color . '">
                        <input type="hidden" name="comment" value="' . $pet->comment . '">
                        <input type="submit" value="Modify"/>
                    </form>
                </td>
                <td  id="btn">
                    <form method="POST" action="/delete_pet.php" >
                        <input type="hidden" name="id" value="' . $pet->id . '">
                        <input type="submit" value="Delete" />
                    </form>
                </td>
                    
              </tr>';
}
?>