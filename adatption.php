<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Adaption</title>
    <link rel="stylesheet" type="text/css"  href="/css/navigationbar.css" />
    <link rel="stylesheet" type="text/css"  href="/css/form.css" />
</head>
<body>
<ul>
    <li><a class="active" href="/">Home</a></li>
    <li><a href="/new_pet_form.php">New Pet</a></li>
    <li><a href="/show-shelter-pets.php">Shelter Pets</a></li>
    <li><a href="show-adopted-pets.php">Adopted Pets</a></li>
</ul><br>

<?php include 'controller/adaption_controller.php';?>

<div>
    <h1>NEW ADAPTION</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <label>Adaption: <?php echo $pet_name ?> (id:<?php echo $pet_id ?>)</label>
        <input type="hidden" name="pet_id" value="<?php echo $pet_id ?>" />
        <br><br>

        <label>Adopter name:</label>
        <span class="error">* <?php echo $nameErr;?></span><br>
        <input type="text" name="name" />
        <br>

        <label>Phone:</label>
        <span class="error">* <?php echo $phoneErr;?></span><br>
        <input type="text" name="phone" />
        <br>

        <label>Postal code:</label>
        <span class="error">* <?php echo $postal_codeErr;?></span><br>
        <input type="text" name="postal_code" />
        <br>

        <label>City:</label>
        <span class="error">* <?php echo $cityErr;?></span><br>
        <input type="text" name="city" />
        <br>

        <label>Street:</label>
        <span class="error">* <?php echo $streetErr;?></span><br>
        <input type="text" name="street" />
        <br>

        <label>House:</label>
        <span class="error">* <?php echo $house_numberErr;?></span><br>
        <input type="text" name="house_number" />
        <br>


        <label>Comment:</label> <br>
        <textarea name="comment" rows="5" cols="40" ></textarea>
        <br>
        <input type="submit" value="Adaption"/>

        <h2><?php echo $message;?></h2>

    </form>
</div>
</body>
</html>