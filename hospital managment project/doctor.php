<!doctype>
<html>
    <head>
        <title>
            SIGN UP PAGE
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2 class="class2">REGISTRATION FORM</h2>
        <div class="container">
        <form method="post" action="doctor.php">
            <div class="class1">
                <label class="class3" for="did">Doctor Id</label>
                <input type="text" name="did" placeholder="enter doctor id" id="did">
            </div>

            <div class="class1">
                <label class="class3" for="dname">Doctor Name</label>
                <input type="text" name="dname" placeholder="enter doctor name" id="dname">
            </div>


            <div class="class1">
                <label class="class3" for="dage">Doctor Age</label>
                <input type="number" name="dage" placeholder="enter doctor age" id="dage">
            </div>


            <div class="class1">
                <label class="class3" for="dqualification">Doctor qualification</label>
                <input type="text" name="dqualif" placeholder="enter doctor qualification" id="dqualification">
            </div>

            <div class="class1">
                <label class="class3"  for="dspecial">Doctor Speciality</label>
                <input type="text" name="dspecial" placeholder="enter doctor speciality" id="dspecial">
            </div>

            <div class="class1">
                <label class="class3"  for="phone">Doctor phone number</label>
                <input type="number" name="dnumber" placeholder="enter doctor mobile number" id="phone">
            </div>

            <div class="class1">
                <label class="class3" for="demail">Doctor email</label>
                <input type="email" name="dmail" placeholder="enter doctor email" id="demail">
            </div>

            <div class="class1">
                <label class="class3" for="user">enater username</label>
                <input type="text" name="duser" placeholder="enter username" id="user">
            </div>

            <div class="class1">
                <label class="class3" for="pass">enter password</label>
                <input type="password" name="dpass" placeholder="enter password" id="pass">
            </div>

            <div class="class1">
                <label class="class3" for="cpass">confirm password</label>
                <input type="password" name="dcpass" placeholder="confirm password" id="cpass">
            </div>

            <input type="submit" value="next" name="button">

            

            

        </form>
        </div>
    </body>
</html>

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
        echo "this doctor id already exists";
    }

    else
    {
    
    if($pass==$cpass)
    {
    
    $query2="select username from dlogin where username='$username1'";
    $run2=mysqli_query($con,$query2);
    if(mysqli_num_rows($run2)>0)
    {
        echo "username already exists";
    }

    else{
    $query3="insert into doctor(did,name,age,qualification,speciality,phone,email) values('$did','$name','$age','$qualification','$special','$number','$mail')";
    $run3=mysqli_query($con,$query3);
    $query4="insert into dlogin(username,password,did) values('$username1','$pass','$did')";
    $run4=mysqli_query($con,$query4);
    if($run3 && $run4)
    {
        echo "inserted successfully";
    }

    else
    {
        echo "error";
    }

}

}

else
{
    echo "password mismatch";
}

    }

          
}




?>