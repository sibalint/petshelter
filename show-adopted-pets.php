<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show pets</title>
    <link rel="stylesheet" type="text/css"  href="/css/table.css" />
    <link rel="stylesheet" type="text/css"  href="/css/navigationbar.css" />
</head>

<body>
<ul>
    <li><a class="active" href="/">Home</a></li>
    <li><a href="/new_pet_form.php">New Pet</a></li>
    <li><a href="/show-shelter-pets.php">Shelter Pets</a></li>
    <li><a href="show-adopted-pets.php">Adopted Pets</a></li>
    <?php include 'service/filter-buttons-handler.php'?>
    <li style="float:right"><a class="<?php echo $dogVisible?>" href="show-adopted-pets.php?dogVisible=<?php echo $dogVisible?>">Dogs</a></li>
    <li style="float:right"><a class="<?php echo $catVisible?>" href="show-adopted-pets.php?catVisible=<?php echo $catVisible?>">Cats</a></li>
</ul>
<br>

<div>
    <table id="maintable">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>birth</th>
            <th>recording_date</th>
            <th>species</th>
            <th>chip_id</th>
            <th>hair_color</th>
            <th>comment</th>
            <th>owner</th>
            <th colspan="2">operations</th>
        </tr>

    <?php include 'service/echo-adopted-pets.php'?>

    </table>
</div>
</body>
</html>