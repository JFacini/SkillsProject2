<?php
// Start the php session
session_start();

// Set posted values to session values
$_SESSION['email'] = $_POST['email'];
$_SESSION['emailpurpose'] = $_POST['emailpurpose'];
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

<p> An e-mail has been sent to <?php echo $_SESSION['email']?> for 

<?php
// if statements differentiating from hidden forms on previous pages
if ($_SESSION['emailpurpose'] == "newaccount") {
  echo "new account creation. Please check your spam folder if the message cannot be found.";
} elseif ($_SESSION['emailpurpose'] == "newpassword") {
  echo "password recovery. Please check your spam folder if the message cannot be found.";
}  else {
    echo "Internal error occurred! Please log out and try again.";
  }
?> 
</p>
<br>
<br>


</div>

</main>

    <footer>
    <?php include 'footer.php';?>
    </footer>

</html>