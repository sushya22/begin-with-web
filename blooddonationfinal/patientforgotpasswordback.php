<?php


$server="localhost";
$username="root";
$password="";
$dbname="blood";

$con=mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit']))
{
    $username1=$_POST['username'];
    $password1=$_POST['password'];
    $cpassword1=$_POST['cpassword'];
    
    $query1="select * from plogin where username='$username1'";
    $run1=mysqli_query($con,$query1);

    if(mysqli_num_rows($run1)!=1)
    {
        header("location:patientforgotpassword.php?error=Incorrect Username");
        exit();
    }
    
    else
    {

    if($password1==$cpassword1)
    {
         $query2="update plogin set password='$password1' where username='$username1'";
         $run2=mysqli_query($con,$query2);

         if($run2)
         {

            header("location:patientforgotpassword.php?error=Password Updated successfully");
            exit();
          


         }


    }

    else
    {
        header("location:patientforgotpassword.php?error=Password Mismatch");
        exit();
    }

}

}




?>