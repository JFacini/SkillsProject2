<?php
// Start the php session
session_start();
?>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="maincss.css" rel="stylesheet" type="text/css"/>
    <title>Halifax Canoe and Kayak | Tech Support</title>
</head>

<header>
<?php include 'header.php';?>
</header>
    
<main>

<h2> You have successfully logged out. </h2>

<br>
<br>

<div class = "contentmaincontainer">

<a href = "index.php"> Click here to log in. </a>
<br>

</div>

</main>

    <footer>
    <?php include 'footer.php';?>
    </footer>

</html>