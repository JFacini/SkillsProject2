<?php
// Start the php session
session_start();

// Set posted values to session values
$_SESSION['title'] = $_POST['title'];
$_SESSION['fname'] = $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['role'] = $_POST['role'];
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

<p> Please choose from the following options: </p>
<br>

<?php
if ($_SESSION['role'] == "Admin") {
  echo "<a href='isnt-working.php'>My computer isn't working.</a> <br> <br> <a href='new-account.php'>Create new account.</a>";
} elseif ($_SESSION['role'] == "Manager") {
  echo "<a href='lost-password.php'>I've lost my password.</a> <br> <br> <a href='isnt-working.php'>My computer isn't working.</a>";
} elseif ($_SESSION['role'] == "CEO") {
    echo "<a href='need-help.php'>Get live help from technical support.</a> <br> <br> <a href='isnt-working.php'>My computer isn't working.</a>";
} else {
    echo "Internal error occurred! Please log out and try again.";
  }
?> 

</div>

</main>

    <footer>
    <?php include 'footer.php';?>
    </footer>

</html>