<?php

$server="localhost";
$username="root";
$password="";
$dbname="dbproject";

$con=mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit']))
{
    $dname=$_POST['name'];
    $did=$_POST['id'];
    $dage=$_POST['age'];
    $dphone=$_POST['phone'];
    $demail=$_POST['mail'];
    $dqualif=$_POST['qualif'];
    $dspecial=$_POST['speciality'];
    $hid=$_POST['hid'];
    $hname=$_POST['hname'];
    $haddr=$_POST['haddress'];
    $hphone=$_POST['hphone'];
    $hlandmark=$_POST['area'];
    $time=$_POST['time'];
    $username1=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

     if($password==$cpassword)
     {

        $query1="select * from dlogin where username=$username1";
        $run1=mysqli_query($con,$query1);
        
        if(mysqli_num_rows($run1)>0)
        {
            header("location: doctorregistration.php?error=username already exists");
            exit();
        }

        else
        {
            
            $query2="select * from doctor where did=$did";
            $run2=mysqli_query($con,$query2);

            

            if(mysqli_num_rows($run2)>0)
        {
            header("location: doctorregistration.php?error=doctor id already exists");
            exit();
        }

        else
        {   

             $query3="select hid from hospital where hid=$hid";
             $run3=mysqli_query($con,$query3);

             $data3=mysqli_fetch_assoc($run3);

             if($hid==$data3['hid'])
             {
                   
                $query4="insert into doctor values ('$did','$dname','$dage','$dphone','$demail','$dqualif','$dspecial','$hid')";
                $run4=mysqli_query($con,$query4);

                $query5="insert into dlogin values ('$username1','$password','$did')";
                $run5=mysqli_query($con,$query5);

                if($run4 && $run5)
                {
                    header("location:doctorregistration.php?error=Registration successfull");
                    exit();
                }

                else{
                    
                    header("location: doctorregistration.php?error=Error Occured");
                    exit();

                }
             }

             else
             {
                 $query6="insert into hospital values ('$hid','$hname','$haddr','$hphone','$hlandmark','$time')";
                 $run6=mysqli_query($con,$query6);

                 $query7="insert into doctor values ('$did','$dname','$dage','$dphone','$demail','$dqualif','$dspecial','$hid')";
                $run7=mysqli_query($con,$query7);

                $query8="insert into dlogin values ('$username1','$password','$did')";
                $run8=mysqli_query($con,$query8);

                if($run7 && $run8 && $run6)
                {
                    header("location:doctorregistration.php?error=Registration successfull");
                    exit();
                }

                else{
                    
                    header("location:doctorregistration.php?error=Error Occured");
                    exit();

                }

             }

            
            
        }


        }
     }

     else
     {
         header("location:doctorregistration.php?error=password mismatch");
         exit();
     }
}

?>