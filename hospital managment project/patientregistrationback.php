<?php

$server="localhost";
$username="root";
$password="";
$dbname="dbproject";

$con=mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit']))
{
    $pname=$_POST['pname'];
    $pid=$_POST['pid'];
    $page=$_POST['page'];
    $pphone=$_POST['phone'];
    $paddr=$_POST['paddr'];
    $gender=$_POST['gender'];
    $username1=$_POST['username'];
    $password1=$_POST['password'];
    $cpassword1=$_POST['cpassword'];

     if($password1==$cpassword1)
     {

        $query1="select * from plogin where username='$username1'";
        $run1=mysqli_query($con,$query1);
        
        if(mysqli_num_rows($run1)>0)
        {
            header("location: patientregistration.php?error=username already exists");
            exit();
        }

        else
        {
            
            $query2="select * from patient where pid=$pid";
            $run2=mysqli_query($con,$query2);

            

            if(mysqli_num_rows($run2)>0)
        {
            header("location: patientregistration.php?error=patient id already exists");
            exit();
        }

        else
        {   

        
                $query4="insert into patient values ('$pid','$pname','$page','$paddr','$gender','$pphone')";
                $run4=mysqli_query($con,$query4);

                $query5="insert into plogin values ('$username1','$password1','$pid')";
                $run5=mysqli_query($con,$query5);

                if($run4 && $run5)
                {
                    header("location:patientregistration.php?error=Registration successfull");
                    exit();
                }

                else{
                    
                    header("location: patientregistration.php?error=Error Occured");
                    exit();

                }
             }


             }

            
            
        }


        
     

     else
     {
         header("location:patientregistration.php?error=password mismatch");
         exit();
     }
    }

?>