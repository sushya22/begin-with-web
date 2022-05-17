<?php

 

$server="localhost";
$username="root";
$password="";
$dbname="blood";

$con=mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit']))
{
    $did=$_POST['did'];
    $dname=$_POST['dname'];
    $dage=$_POST['dage'];
    $dblood=$_POST['blood'];
    $dphone=$_POST['phone'];
    $daddr=$_POST['address'];
    
    $username1=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

     if($password==$cpassword)
     {

        $query1="select * from dlogin where username='$username1'";
        $run1=mysqli_query($con,$query1);
        
        if(mysqli_num_rows($run1)>0)
        {
            header("location:donorregistration.php?error=Username already exists");
            exit();
        }

        else
        {
            
            $query2="select * from donor where did='$did'";
            $run2=mysqli_query($con,$query2);

            

            if(mysqli_num_rows($run2)>0)
        {
            header("location:donorregistration.php?error=Donor id already exists");
            exit();
        }

        else
        {   

            $query7="insert into donor values ('$did','$dname','$dage','$dblood','$dphone','$daddr')";
           $run7=mysqli_query($con,$query7);

           $query8="insert into dlogin values ('$username1','$password','$did')";
           $run8=mysqli_query($con,$query8);

           if($run7 && $run8 )
           {
               header("location:donorregistration.php?error=Registration successfull");
               exit();
           }

           else{
               
               header("location:donorregistration.php?error=Error Occured");
               exit();

           }


           
             }


        }

    }
        

     else
     {
         header("location: donorregistration.php?error=Password mismatch");
         exit();
     }
    
    }

?>