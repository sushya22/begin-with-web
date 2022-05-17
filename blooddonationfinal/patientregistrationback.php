<?php

 

$server="localhost";
$username="root";
$password="";
$dbname="blood";

$con=mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit']))
{
    $pid=$_POST['pid'];
    $pname=$_POST['pname'];
    $page=$_POST['page'];
    $pblood=$_POST['blood'];
    $pphone=$_POST['phone'];
    $paddr=$_POST['address'];
    
    $username1=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

     if($password==$cpassword)
     {

        $query1="select * from plogin where username='$username1'";
        $run1=mysqli_query($con,$query1);
        
        if(mysqli_num_rows($run1)>0)
        {
            header("location:patientregistration.php?error=Username already exists");
            exit();
        }

        else
        {
            
            $query2="select * from patient where did='$did'";
            $run2=mysqli_query($con,$query2);

            

            if(mysqli_num_rows($run2)>0)
        {
            header("location:patientregistration.php?error=Patient id already exists");
            exit();
        }

        else
        {   

            $query7="insert into patient values ('$pid','$pname','$page','$pblood','$pphone','$paddr')";
           $run7=mysqli_query($con,$query7);

           $query8="insert into plogin values ('$username1','$password','$pid')";
           $run8=mysqli_query($con,$query8);

           if($run7 && $run8 )
           {
               header("location:patientregistration.php?error=Registration successfull");
               exit();
           }

           else{
               
               header("location:patientregistration.php?error=Error Occured");
               exit();

           }


           
             }


        }

    }
        

     else
     {
         header("location: patientregistration.php?error=Password mismatch");
         exit();
     }
    
    }

?>