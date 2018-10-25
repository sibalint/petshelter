<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete</title>
    <link rel="stylesheet" type="text/css"  href="/css/navigationbar.css" />
    <link rel="stylesheet" type="text/css"  href="/css/confirmation.css" />
</head>
<body>
<ul>
    <li><a class="active" href="/">Home</a></li>
    <li><a href="/new_pet_form.php">New Pet</a></li>
    <li><a href="/show-shelter-pets.php">Shelter Pets</a></li>
    <li><a href="show-adopted-pets.php">Adopted Pets</a></li>
</ul><br>

<?php include 'controller/deletepet_controller.php'?>

<div>
    <h1>Are you sure you want to delete?</h1>
    <table>
        <tr>
            <td>
                <form method="POST" action="/delete_pet.php" >
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <input type="hidden" name="answer" value="yes">
                    <input class="yes" type="submit" value="Yes" />
                </form>
            </td>
            <td>
                <a class="no" href="/">No</a>
            </td>
        </tr>
    </table>
    <h3><?php echo $message ?></h3>
</div>
</body>
</html>









