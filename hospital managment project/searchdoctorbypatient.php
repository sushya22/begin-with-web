<?php

session_start();

$server="localhost";
$username="root";
$password="";
$dbname="dbproject";

$con=mysqli_connect($server,$username,$password,$dbname);
$pid=$_SESSION['pid'];
if(isset($_POST['submit']))
{
    $symptoms=$_POST['symptoms'];
    $sym="%$symptoms%";
    $query1="select hid from doctor where speciality like '$sym'";
    $run1=mysqli_query($con,$query1);
    
    $query5="insert into medicalrecord(symptoms,pid) values('$symptoms','$pid')";
    $run5=mysqli_query($con,$query5);


}


?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="resultsofsearchstyle.css">
</head>
<body>
    <div class="class1">

    <div class="class20">
        <h2>Here Are Some Result</h2>
    </div>
        <table class="class2">
            <thead>
                <tr>
                    <th>hospital name</th>
                    <th>hospital address</th>
                    <th>hospital contact</th>
                    <th>hospital location</th>
                    <th>hospital time</th>
                </tr>
                
            </thead>

            <tbody>
                <?php

                while($row=mysqli_fetch_row($run1))
                {

                    $hid1=$row[0];

                    $query2="select hname,haddr,hphone,landmark,timing from hospital where hid='$hid1'";
                    $run2=mysqli_query($con,$query2);
                    $data2=mysqli_fetch_row($run2);
                    ?>

                    <tr>
                     
                    <td>
                        <?php
                        
                        echo $data2[0];
                        ?>
                    </td>
                     
                    <td>
                        <?php

                        echo $data2[1];
                        ?>
                    </td>

                    <td>
                        <?php

                        echo $data2[2];
                        ?>
                    </td>

                    <td>
                        <?php

                        echo $data2[3];
                        ?>
                    </td>

                    <td>
                        <?php

                        echo $data2[4];
                        ?>
                    </td>

                    </tr>

                    <?php

                }
?>
                
            </tbody>
        </table>
    </div>
</body>
</html>