<?php

session_start();
$server="localhost";
$username="root";
$password="";
$dbname="dbproject";

$con=mysqli_connect($server,$username,$password,$dbname);

$did=$_SESSION['did'];

if(isset($_POST['insert']))

{
    $hname=$_POST['hname'];
    $haddr=$_POST['haddr'];
    $htime=$_POST['htime'];
    $hphone=$_POST['hphone'];
    $hlandmark=$_POST['harea'];


    $query1="select hid from doctor where did=$did";

    

    if(true)
    {
        $run1=mysqli_query($con,$query1);
        $data1=mysqli_fetch_assoc($run1);
        $hid1=$data1['hid'];
        $query2="update hospital set hname='$hname', haddr='$haddr', hphone='$hphone', landmark='$hlandmark' ,timing='$htime' where hid=$hid1";
        $run2=mysqli_query($con,$query2);

        if($run1 && $run2)
        {
            header("location:hospital.php?error=updated successfully");
            exit();
        }

        else
        {

            header("location:hospital.php?error=Error while Updating");
            exit();

        }
    }



}
?>