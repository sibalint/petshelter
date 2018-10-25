<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Adaption</title>
    <link rel="stylesheet" type="text/css"  href="/css/navigationbar.css" />
    <link rel="stylesheet" type="text/css"  href="/css/profil.css" />
</head>
<body>
<ul>
    <li><a class="active" href="/">Home</a></li>
    <li><a href="/new_pet_form.php">New Pet</a></li>
    <li><a href="/show-shelter-pets.php">Shelter Pets</a></li>
    <li><a href="show-adopted-pets.php">Adopted Pets</a></li>
</ul>
<br>

<?php include 'controller/profile_controller.php'?>

<div>
    <h1>Profile</h1>
    <table>
        <tr><td>ID:</td>            <td><?php echo $id?></td></tr>
        <tr><td>Name:</td>          <td><?php echo $name?></td></tr>
        <tr><td>Phone:</td>         <td><?php echo $phone?></td></tr>
        <tr><td>Postal Code:</td>   <td><?php echo $postal_code?></td></tr>
        <tr><td>City:</td>          <td><?php echo $city?></td></tr>
        <tr><td>Street:</td>        <td><?php echo $street?></td></tr>
        <tr><td>House number:</td>  <td><?php echo $house_number?></td></tr>
    </table>
    <br><div><?php echo $comment?></div>

</div>
</body>
</html>