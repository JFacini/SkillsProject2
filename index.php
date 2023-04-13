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

<h2>Welcome to your IT Support System</h2>

<br>
<br>

<div class = "loginbar">
  <form action="problem.php" method = "post">
      <select id="title" name="title">
      <option value="Mr.">Mr.</option>
      <option value="Ms.">Ms.</option>
      <option value="Mrs.">Mrs.</option>
      <option value="Dr.">Dr.</option>
    </select>
    <input type="text" id="fname" name="fname" minlength = 2 maxlength = 20 placeholder="John" required>
    <input type="text" id="lname" name="lname" minlength = 2 maxlength = 20 placeholder="Wick" required>
    <select id="role" name="role">
      <option value="Admin">Admin</option>
      <option value="Manager">Manager</option>
      <option value="CEO">CEO</option>
    </select>

    <input type="submit" name = "submit" value = "Submit">

  </form>
<br>
</div>
        
</main>

    <footer>
    <?php include 'footer.php';?>
    </footer>

</html>