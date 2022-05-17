<?php
$servername="localhost";
$username="root";
$password="";
$database="doctor";
$con=mysqli_connect($servername,$username,$password,$database);

if(!$con)
{
    die(mysqli_error("error"+$con));
}

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $age=$_POST['age'];

    $sql="insert into 'doctor_info'(id,age) values('$name','$age')";

    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('new record inserted')</script>";
    }

    else
    {
        echo "error occured while inserting....";
    }

}

mysqli_close($con)
?>