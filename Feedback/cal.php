<?php
    include "connect.php";
    if(isset($_POST['btn'])) {
        $date = $_POST['date'];
        $exp = $_POST['exp'];
        $cmnts = $_POST['comments'];      
        $qry = "INSERT INTO `review` ( `date`, `exp`, `cmnts`) VALUES ('$date', '$exp', '$cmnts');";
        mysqli_query($conn, $qry) or die ("Error inserting: ".$qry);
        header('location:insertvote.php');
      }
?>
<!DOCTYPE html>
<html>
    <style>
        body{
            background: url(m.jpg) no-repeat center fixed;
            background-size:85em 80em ;
            text-align: center;
            background-color: peru;
        }
        h2{
            color:Brown;
            text-align: center;
        }
        .choice{
            text-align: left;
        }
        .i{
            padding:100px 100px 150px 600px;
        }
    </style>
        <body>
        <div class="i">
                <h2>Mess Feedback</h2>
                <p> Please provide your feedback below:</p>
                <form method="post" id="reused_form">
                    <input name="date" type="date"><br>
                        <label>Rate your overall experience?</label><br>
                        <p>
                            <label class="radio-inline">
                            <input type="radio" name="exp" id="radio_experience" value="excellent" >
                            Excellent
                            </label>
                            
                            <label class="radio-inline">
                            <input type="radio" name="exp" id="radio_experience" value="good" >
                            Good
                            </label>
        
                            <label class="radio-inline">
                            <input type="radio" name="exp" id="radio_experience" value="worst" >
                            Worst
                            </label>
                        </p>
                     <label for="comments">Comments:</label>
                    <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                    <button type="submit" name="btn" >Post </button>
               </form>
        </div>       
        </body>
        </html>