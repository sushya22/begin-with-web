<?php
    $name=$_POST['name'];
    $age=$_POST['age'];
    $con=new mysqli('localhost','root','','student');
    if($con->connect_error)
    {
        die('Connection failed: '.$con->connect_error);
    }

    else
    {
        $stmt=$con->prepare("insert into stud(name,age) values(?,?)");
        $stmt->bind_param("si",$name,$age);
        $stmt->execute();
        echo "success";
        $stmt->close();
        $con->close();
    }
?>