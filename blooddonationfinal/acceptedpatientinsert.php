<?php

$server="localhost";
$username="root";
$password="";
$dbname="blood";

$con=mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['approve']))
{
    $pid=$_POST['pid'];
    $blood=$_POST['blood'];
    $unit=$_POST['unit'];

    $query100="select total from totalblood where bloodtype='$blood'";
    $run100=mysqli_query($con,$query100);

    $data100=mysqli_fetch_assoc($run100);
    $available=$data100['total'];

    if($available>$unit)

    {


    $query1="select bloodtype, unit from patienthistory where pid='$pid' and bloodtype='$blood'";
    $run1=mysqli_query($con,$query1);

    if($run1)
    {
        $data1=mysqli_num_rows($run1);
        if($data1>0)
        {   
            $data2=mysqli_fetch_assoc($run1);
            $unit1=$data2['unit'];
            $unit2=$unit1+$unit;
            $query2="update patienthistory set unit='$unit2' where pid='$pid' and bloodtype='$blood'";
            $run2=mysqli_query($con,$query2);

        }

        else
        {
            $query3="insert into patienthistory values('$pid','$blood','$unit')";
            $run3=mysqli_query($con,$query3);

        }
    }

    $available=$available-$unit;
    $query200="update totalblood set total='$available' where bloodtype='$blood'";
    $run200=mysqli_query($con,$query200);
    
    $query4="delete from requestblood where pid='$pid' and bloodtype='$blood'";
    $run4=mysqli_query($con,$query4);

}

else
{
  echo "can't approve";
}

}

else
{
    if(isset($_POST['reject']))
    {
        $pid=$_POST['pid'];
        $blood=$_POST['blood'];


        $query10="delete from requestblood where pid='$pid' and bloodtype='$blood'";
        $run10=mysqli_query($con,$query10);

       
    }
}

?>