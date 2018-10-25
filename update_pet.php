<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add new pet</title>
    <link rel="stylesheet" type="text/css"  href="/css/navigationbar.css" />
    <link rel="stylesheet" type="text/css"  href="/css/form.css" />
</head>
<body>
<ul>
    <li><a class="active" href="/">Home</a></li>
    <li><a href="/new_pet_form.php">New Pet</a></li>
    <li><a href="/show-shelter-pets.php">Shelter Pets</a></li>
    <li><a href="show-adopted-pets.php">Adopted Pets</a></li>
</ul>

<?php include 'controller/updatepet_controller.php';?>

<div>
    <h1>MODIFY PET</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <label>Database id: <?php echo $id ?></label>
        <input type="hidden" name="id" value="<?php echo $id ?>" />
        <br><br>

        <label>Name:</label>
        <span class="error">* <?php echo $nameErr;?></span><br>
        <input type="text" name="name" value="<?php echo $name ?>" />
        <br>

        <label>Birth:</label>
        <span class="error">* <?php echo $birthErr;?></span><br>
        <input type="date" name="birth"  value="<?php echo $birth ?>" />
        <br>

        <label>Recording date:</label>
        <span class="error">* <?php echo $recording_dateErr;?></span><br>
        <input type="date" name="recording_date" value="<?php echo $recording_date ?>" max=<?php echo date("Y-m-d")?> />
        <br>

        <label>Species: </label>
        <input type="radio" name="species" value="dog" <?php echo $checkDogValue  ?>> Dog
        <input type="radio" name="species" value="cat" <?php echo $checkCatValue  ?>> Cat
        <br><br>

        <label>Chip id:</label>
        <span class="error"> <?php echo $chip_idErr;?></span><br>
        <input type="text" name="chip_id" value="<?php echo $chip_id ?>" />
        <br>

        <label>Hair color:</label>
        <span class="error">* <?php echo $hair_colorErr;?></span><br>
        <input type="text" name="hair_color" value="<?php echo $hair_color ?>" />
        <br>

        <label>Comment:</label> <br>
        <textarea name="comment" rows="5" cols="40"><?php echo $comment ?></textarea>
        <br>
        <input type="submit" value="Update pet"/>

        <h2><?php echo $message;?></h2>

    </form>
</div>
</body>
</html>