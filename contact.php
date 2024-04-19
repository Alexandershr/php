<?php
session_start();
include('config/dbconfig.php');
include('templates/header.php');
?>

<h2>Contact Us</h2>
<form>
    <label for="fname">First Name:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last Name:</label><br>
    <input type="text" id="lname" name="lname"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="message">Message:</label><br>
    <textarea id="message" name="message"></textarea><br>
    <input type="submit" value="Submit">
</form>

<?php include('templates/footer.php'); ?>
