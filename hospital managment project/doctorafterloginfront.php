<?php
session_start();

$server="localhost";
$username="root";
$password="";
$dbname="dbproject";

if(!(isset($_SESSION['username'])))
{
    header("location:doctorlogin.php");
    exit();
}

$con=mysqli_connect($server,$username,$password,$dbname);

$did=$_SESSION['did'];

$query1="select hid from doctor where did='$did'";
$run1=mysqli_query($con,$query1);

$data1=mysqli_fetch_assoc($run1);
$hid1=$data1['hid'];

$query2="select * from hospital where hid='$hid1'";
$run2=mysqli_query($con,$query2);

$data2=mysqli_fetch_row($run2);






?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Hospital Information
        </title>

        <link rel="stylesheet" href="Doctorafterloginstyle.css">
    </head>

    <body>
        <table class="class1">
            <thead>
                <th colspan=2>
                   <h2>Hospital Information</h2> 
                </th>
            </thead>
            <tbody>
                <tr>
                    <td>
                       Hospital Id
                    </td>
                    <td class="class7">
                        <?php
                         echo $data2[0];
                       ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Hospital Name
                    </td>
                    <td class="class7">
                        <?php
                       echo $data2[1];
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Hospital Phone
                    </td>
                    <td  class="class7">
                    <?php
                      echo  $data2[2];
                        ?>
                        
                    </td>
                </tr>

                <tr>
                    <td>
                        Hospital Address
                    </td>
                    <td class="class7">
                    <?php
                       echo $data2[3];
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Hospital Landmark
                    </td>
                    <td class="class7">
                    <?php
                      echo  $data2[4];
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Hospital Time
                    </td>
                    <td class="class7">
                    <?php
                      echo  $data2[5];
                        ?>
                    </td>
                </tr>

            </tbody>
        </table>

        <div class="class10"> 
            <button name="upadates"><a href="hospital.php">Upadate information</a></button>
        </div>

        <div class="class20">Please enter the patient id to check History</div>
        <form action="patienthistorybydoctor.php" method="post">
        <input type="number" name="search" placeholder="Enter Patient Id">
        <input type="submit" name="submit" value="Search">
        </form>
    </body>
</html>