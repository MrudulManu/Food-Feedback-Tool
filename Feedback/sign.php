<?php
    include "connect.php";
    session_start();
    if(isset($_POST['sub'])) {
      $userid = $_POST['user_name'];
      $email = $_POST['Email'];
      $password = $_POST['Pwd'];      
      $qry = "INSERT INTO `signup` ( `username`, `email`, `pwd`) VALUES ('$userid', '$email', '$password');";
      mysqli_query($conn, $qry) or die ("Error inserting: ".$qry);
      header('location:login.php');
    }
?>
<!DOCTYPE html>
<html>
  <style>
    .con{
        color:white;
        font-size=150%;      
    }
    body{
      background: url(llll.jpg) no-repeat center fixed;
      background-size:85em 80em 80em 83em;
      font-size:1.5em;
      text-align:right;
    }
    h1{
      color:Orange;
    }
    #p{
      font-size=50px;  
    }
    #s{
      padding:10px 50px;
    }
    #ss{
      padding :10px 20px;
      margin-right:3em
    }
      </style>
  <body>
    <div class="con">
      <h1 id="s">Sign Up</h1>
        <p id="p">Please fill this form to create an account.</p>
        <form name="Customer" onsubmit"return validateform()" method="post">
        <b>UserName</b>
        <input type="text" placeholder="UserName" name="user_name" ><br><br>
        <b>Email</b>
        <input type="text" placeholder="Enter Email" name="Email"><br><br>
        <b>Password</b>
        <input type="password" placeholder="Enter Password" name="Pwd"><br><br>
        <button type="submit" name="sub" id="ss">Create</button>
    </div>
    </form>
    </div>
  </body>
</html>