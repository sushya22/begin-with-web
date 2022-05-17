<?php

session_start();

$server="localhost";
$username="root";
$password="";
$dbname="blood";

$con=mysqli_connect($server,$username,$password,$dbname);

$did=$_SESSION['did'];

if(!(isset($_SESSION['username'])))

{
    header("location:donorlogin.php");
    exit();

}


$query1="select * from donor where did='$did'";
$run1=mysqli_query($con,$query1);
$row1=mysqli_fetch_row($run1);



?>

<!DOCTYPE html>
<html>
    <head>
      <title>
          Donor login
      </title>

      <link rel="stylesheet" href="donorafterlogin.css">
    </head>
    <body>
        <div class="class1">
            <ul>
                <li>conactus</li>
                <li>Why Donate Blood</li>
                <li>About US</li>
                <li>Home</li>
            </ul>
    
            </div>

            <div class="class2">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt assumenda optio, eveniet cumque maxime, accusamus quo facere, vitae quisquam fugit est similique. Aut iusto labore ab nulla id? Vero ad magnam nostrum inventore dolorem ea consectetur eos fugit perspiciatis quod aspernatur sint nam distinctio obcaecati corrupti sit, repudiandae perferendis debitis quidem ipsa quaerat! Fuga blanditiis neque modi magnam alias recusandae et cupiditate quos temporibus nostrum voluptas veniam delectus harum facilis cumque nemo vitae culpa doloremque deleniti, cum quidem vero rem dolore corporis? Non iusto ex nesciunt atque explicabo praesentium dignissimos fuga aliquam numquam voluptatem nam, tenetur a nemo ut eaque!</p>
            </div>

            <div class="class3">
                <div class="container">

                    <h2>Your Account</h2>

                   <table class="classtable">
                       

                       
                   <tbody>
                       
                       <tr>
                           <td>
                               <b>Name:</b>
                           </td>
                           <td>
                               <?php

                              echo $row1[1];
                               ?>
                           </td>
                       </tr>


                       <tr>
                           <td>
                              <b> Blood Group:</b>
                           </td>
                           <td>
                           <?php

                        echo $row1[3];
                               ?>
                           </td>
                       </tr>

                       <tr>
                           <td>
                              <b> Contact Number:</b>
                           </td>
                           <td>
                           <?php

                         echo $row1[4];
                            ?>
                           </td>
                       </tr>

                       <tr>
                           <td>
                              <b> Address:</b>
                           </td>
                           <td>
                           <?php

                            echo $row1[5];
                            ?>
                           </td>
                       </tr>
                   </tbody>
                   </table> 
                   
                </div>

                <button type="submit"><a href="blooddonationbydonor.php">Donate Blood</a></button>
                <button type="submit" id="buttonid1"><a href="Donorhelp.php">Check Your Donation</a></button>
                <p><button type="submit" id="buttonid2"><a href="donorlogout.php">LogOut</a></button></p>

            </div>
    </body>
</html>