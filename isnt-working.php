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
    <p>So your computer isn't working, eh?...</p>
</div>
<br>
<br>
<div class = "centergif">

<img src="https://media.giphy.com/media/bPCwGUF2sKjyE/giphy.gif" alt="computer rage gif" style="width:400px;height:300px">
<br>

</div>

</main>

    <footer>
    <?php include 'footer.php';?>
    </footer>

</html>