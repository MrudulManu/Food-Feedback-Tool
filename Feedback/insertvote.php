<?php
include "connect.php";
if(isset($_POST[ 'sub' ])){
    $opt=$_POST['items']; 
    $qry="INSERT INTO `vote` ( `items`) VALUES ('$opt');";
    mysqli_query($conn, $qry) or die ("Error inserting: ".$qry);
    header('location:query.php');
}
?>
<!DOCTYPE html>
<html>
    <style>
        body{
            background: url(n.jpg) no-repeat center fixed;
      background-size:85em 90em;
        }
        h2{
            color:Yellow;
        }
        </style>
    <body>
    <form method="post">
        <h2>Vote among the given items</h2></br><br>
            <select name="items">
                          <option value="Bread">Bread</option>
                          <option value="Biryani">Biryani</option>
                          <option value="Meals">Meals</option>
                          <option value="Pizza">Pizza</option>
                          <option value="Fried Rice">Fried Rice</option>
                          <option value="Curd Rice">Curd Rice</option>
                          <option value="Curd Rice">Tiger rice</option>
                          <option value="Curd Rice">Kichidi</option>
            </select></br><br><br><br><br><br><br>
            <input type="submit" name="sub" value="Vote">
    </body>
</html>