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


if(isset($_POST['submit']))
{

    $disease=$_POST['disease'];
    $blood=$_POST['blood'];
    $unit=$_POST['unit'];

    if($blood=="")
    {
        header("location:blooddonationbydonor.php?error=Please select the blood type");
        exit();

    }

    else
    {   
        $query1="select * from donateblood where did='$did' and bloodtype='$blood'";
        $run1=mysqli_query($con,$query1);
        
        if(mysqli_num_rows($run1)>0)
        {
            $data1=mysqli_fetch_assoc($run1);
            $unit1=$data1['unit'];
            $unit=$unit+ $unit1;
            
            $query3="update donateblood set unit='$unit' where did='$did' and bloodtype='$blood'";
            $run3=mysqli_query($con,$query3);

            if($run3)
            {
                header("location: blooddonationbydonor.php?error=Your request Has been Sent");
                exit();
            }

            else
            {
                header("location: blooddonationbydonor.php?error=Some Error Occured");
                exit();

            }



        }

        else
        {
        $query2="insert into donateblood values ('$did','$disease','$blood','$unit')";
        $run2=mysqli_query($con,$query2);
        
        if($run2)
        {
            header("location: blooddonationbydonor.php?error=Your request Has been Sent");
            exit();

        }

        else
            {
                header("location: blooddonationbydonor.php?error=Some Error Occured");
                exit();

            }
        
    }

}


}







?>