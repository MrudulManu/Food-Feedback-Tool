<!DOCTYPE html>
<html>
<p>You are successfully logged in!</p>
<?php
   session_start();
   if(isset($_SESSION['Email'])) {
      echo 'you are logged in...';
   } else {
      echo "<p>Please login first</p>";
      header('location:login.php');
   }
?>
</html>
