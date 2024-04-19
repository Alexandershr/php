<?php
session_start();
include('config/dbconfig.php');
include('templates/header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Registration code here
}

?>

<h2>Register</h2>
<form method="post">
    <label for="fname">First Name:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last Name:</label><br>
    <input type="text" id="lname" name="lname"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Submit">
</form>

<?php include('templates/footer.php'); ?>


