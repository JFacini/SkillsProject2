<?php
// Start the php session
session_start();
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

<h2> Hello <?php
// Echo session variables 
echo $_SESSION['title']," ", $_SESSION['fname']," ", $_SESSION['lname'], ", ", $_SESSION['role'], "!";
?>
</h2>

<br>
<br>

<div class = "contentmaincontainer">

<p> Please insert a registered e-mail address for password recovery: </p>

<br>

<form action="send-email.php" method = "post">
<input type="text" id="email" name="email" minlength = 5 maxlength = 30 placeholder="john@gmail.com" required>
<input type="hidden" id="emailpurpose" name="emailpurpose" value="newpassword">
<input type="submit" name = "submit" value = "Recover Password">
</form>
</div>

</main>

    <footer>
    <?php include 'footer.php';?>
    </footer>

</html>