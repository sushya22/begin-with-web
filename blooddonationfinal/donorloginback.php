<?php

session_start();

$server="localhost";
$username="root";
$password="";
$dbname="blood";

$con=mysqli_connect($server,$username,$password,$dbname);


if(isset($_POST['submit']))
{
    $username1=$_POST['username'];
    $password1=$_POST['password'];

    $query1="select * from dlogin where username='$username1' and password='$password1'";
    $run1=mysqli_query($con,$query1);

    if(mysqli_num_rows($run1)==1)
    {
        $data1=mysqli_fetch_row($run1);
        $_SESSION['username']=$data1[0];
        $_SESSION['did']=$data1[2];

        header("location: donorafterlogin.php");
        exit();
    }

    else
    {
        header("location: donorlogin.php?error=incorrect username or password");
        exit();
    }
}