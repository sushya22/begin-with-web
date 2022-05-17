
<?php


session_start();
$server="localhost";
$username="root";
$password="";
$dbname="blood";

$did=1;

$con=mysqli_connect($server,$username,$password,$dbname);

if(isset($_SESSION['username']))
{
    header("location:donorlogin.php");
    exit();
}

$query1="select bloodtype,unit from donorhelp where did='$did'";
$run1=mysqli_query($con,$query1);






?>

<!DOCTYPE html>

<html>
    <head>
        <title>
            Donor History
        </title>

        <link rel="stylesheet" href="donorhelp.css">
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

            

            <div class="class3">
                <div class="container">

                    <h2>Your Donation</h2>

                   <table class="classtable">
                       <thead>
                           <tr>
                               <th>
                                    Blood Type
                               </th>
                               <th>
                                    Units Donated
                               </th>
                           </tr>
                       </thead>

                       <tbody>

                       <?php 

                       while($row1=mysqli_fetch_row($run1))

                       {
                           ?>
                                    
                           <tr>
                               <td>
                                   <?php
                                   echo $row1[0];
                                   ?>
                               </td>
                               <td>
                               <?php
                                   echo $row1[1];
                                   ?>
                               </td>
                           </tr>

                           <?php

                       }

                       ?>
                       </tbody>
                   </table> 
                   
                </div>

                <button type="submit"><a href="blooddonationbydonor.php">Donate Blood</a></button>
                <p><button type="submit" id="buttonid2"><a href="donorlogout.php">LogOut</a></button></p>

            </div>
    </body>
</html>

