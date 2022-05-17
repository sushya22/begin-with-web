<?php
$name=$_POST["dname"];
$age=$_POST["dage"];
$qualification=$_POST["dqualif"];
$special=$_POST["dspecial"];
$number=$_POST["dnumber"];
$mail=$_POST["dmail"];
$username1=$_POST["duser"];
$pass=$_POST["dpass"];
$cpass=$_POST["dcpass"];
$did=$_POST["did"];

$hid=$_POST["hid"];
$hname=$_POST["hname"];
$haddr=$_POST["haddr"];
$hphone=$_POST["hphone"];
$harea=$_POST["harea"];
$htime=$_POST["htime"];

$server="localhost";
$username="root";
$password="";
$dbname="project";

$con=mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['button']))
{

    $query1="select * from doctor where did='$did'";
    $run1=mysqli_query($con,$query1);

    if(mysqli_num_rows($run1)>0)
    {
        header("location: index.php?error=this id already exists");
        exit();
    }

    else
    {
    
    if($pass==$cpass)
    {
    
    $query2="select username from doctorlogin where username='$username1'";
    $run2=mysqli_query($con,$query2);
    if(mysqli_num_rows($run2)>0)
    {
        header("location: index.php?error=user name already exists");
        exit();
    }

    else{
    
    $query3="insert into hospital(hid,hname,addr,phone,area,time) values('$hid','$hname','$haddr','$hphone','$harea','$htime')";
    $run3=mysqli_query($con,$query3);
    $query4="insert into doctor(did,dname,dage,qualification,speciality,dphone,demail,hid) values('$did','$name','$age','$qualification','$special','$number','$mail','$hid')";
    $run4=mysqli_query($con,$query4);
    $query5="insert into doctorlogin(username,password,did) values('$username1','$pass','$did')";
    $run5=mysqli_query($con,$query5);
    if($run3 && $run4 && $run5)
    {
        header("location: index.php?error=inserted successfully");
        exit();
    }

    else
    {
        header("location: index.php?error=Error while inserting");
        exit();
    }

}

}

else
{
    header("location: index.php?error=password mismatch");
        exit();
}

    }

          
}




?>