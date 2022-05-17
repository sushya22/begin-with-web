<?php

session_start();

$server="localhost";
$username="root";
$password="";
$dbname="dbproject";

$con=mysqli_connect($server,$username,$password,$dbname);

if(!(isset($_SESSION['username'])))
{
   header("location: doctorlogin.php");
   exit();
}

$pid=$_POST['search'];

$query1="select symptoms from medicalrecord where pid='$pid'";
$run1=mysqli_query($con,$query1);
$data1=mysqli_num_rows($run1);




?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            History
            
        </title>
        <link rel="stylesheet" href="historystyle.css">
    </head>
    <body>

           
           <div class="class1">
           <table class="class2">
               <thead>
                   <tr>
                       <th>Previously Searched For</th>
                   </tr>
               </thead>
               <tbody>
                   <?php
                     while($row=mysqli_fetch_row($run1))
                     {
                         ?>
                         <tr>
                             <td> <?php 
                             
                                 echo $row[0];
                             ?>
                                 
                                 </td>
                         </tr>
                     

                     <?php
                
              
                     }
                   ?>

               </tbody>

           </table>
           </div>
         
    </body>
</html>