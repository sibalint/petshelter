<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add new pet</title>
    <link rel="stylesheet" type="text/css"  href="/css/form.css" />
    <link rel="stylesheet" type="text/css"  href="/css/navigationbar.css" />
</head>
<body>
<ul>
    <li><a class="active" href="/">Home</a></li>
    <li><a href="/new_pet_form.php">New Pet</a></li>
    <li><a href="/show-shelter-pets.php">Shelter Pets</a></li>
    <li><a href="show-adopted-pets.php">Adopted Pets</a></li>
</ul>
<br>

<?php include 'controller/addpet_controller.php';?>

<div>
    <h1>ADD PET</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <label>Pet name:</label>
        <span class="error">* <?php echo $nameErr;?></span><br>
        <input type="text" name="name" />
        <br>

        <label>Birth:</label>
        <span class="error">* <?php echo $birthErr;?></span><br>
        <input type="date" name="birth"  value=<?php echo date("Y-m-d")?> />
        <br>

        <label>Recording date:</label>
        <span class="error">* <?php echo $recording_dateErr;?></span><br>
        <input type="date" name="recording_date" value=<?php echo date("Y-m-d")?> max=<?php echo date("Y-m-d")?> />
        <br>

        <label>Species: </label>
        <input type="radio" name="species" value="dog" checked="true"> Dog
        <input type="radio" name="species" value="cat"> Cat
        <br><br>

        <label>Chip id:</label>
        <span class="error"> <?php echo $chip_idErr;?></span><br>
        <input type="text" name="chip_id" />
        <br>

        <label>Hair color:</label>
        <span class="error">* <?php echo $hair_colorErr;?></span><br>
        <input type="text" name="hair_color" />
        <br>

        <label>Comment:</label> <br>
        <textarea name="comment" rows="5" cols="40" ></textarea>
        <br>
        <input type="submit" value="Add new pet"/>

        <h2><?php echo $message;?></h2>

    </form>
</div>
</body>
</html>