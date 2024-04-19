<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}
include('config/dbconfig.php');
include('templates/header.php');
?>

<h2>Welcome, Member!</h2>
<p>This page is accessible only to users who are logged in.</p>

<?php include('templates/footer.php'); ?>

-