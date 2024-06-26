<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Final Assignment</title>
    <!-- Include your CSS here -->
</head>
<body>
<div id="container">
    <header id="banner">
        <h1>Final Assignment</h1>
        <h3>Users' Info Using PHP with MySQL</h3>
    </header>
    <div id="nav">
        <ul>
            <?php
            session_start();
            // Check if user is logged in
            if(isset($_SESSION['user_id'])) {
                echo '<li><a href="logout.php">Logout</a></li>';
            } else {
                echo '<li><a href="register.php">Register</a></li>';
            }
            ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="member.php">Member</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
    <div class="main-content">
