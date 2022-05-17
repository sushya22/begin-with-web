<?php


session_start();

$server="localhost";
$username="root";
$password="";
$dbname="blood";

$con=mysqli_connect($server,$username,$password,$dbname);

$pid=$_SESSION['pid'];

if(!(isset($_SESSION['username'])))

{
    header("location:patientlogin.php");
    exit();

}


?>


<!DOCTYPE html>
<html>
    <head>
      <title>
          Blood request by patient
      </title>

      <link rel="stylesheet" href="bloodrequestbypatient.css">
    </head>
    <body>
        <div class="class1">
            <ul>
                <li>conactus</li>
                <li>Why Donate Blood</li>
                <li>About US</li>
                <li>Home</li>
            </ul>
    
            </div>

            <div class="class2">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt assumenda optio, eveniet cumque maxime, accusamus quo facere, vitae quisquam fugit est similique. Aut iusto labore ab nulla id? Vero ad magnam nostrum inventore dolorem ea consectetur eos fugit perspiciatis quod aspernatur sint nam distinctio obcaecati corrupti sit, repudiandae perferendis debitis quidem ipsa quaerat! Fuga blanditiis neque modi magnam alias recusandae et cupiditate quos temporibus nostrum voluptas veniam delectus harum facilis cumque nemo vitae culpa doloremque deleniti, cum quidem vero rem dolore corporis? Non iusto ex nesciunt atque explicabo praesentium dignissimos fuga aliquam numquam voluptatem nam, tenetur a nemo ut eaque!</p>
            </div>

            <div class="class3">
                <div class="container">

                    
                    <form action="bloodrequestbypatientback.php" method="post">

                    <h2 style="margin-left:70px;"> <?php if(isset($_GET['error']))
                             
                             {
                                 echo $_GET['error'];
                             }
                             ?>
                             </h2>
                       

                      
                       
                      <div class="class4">
                           <label for="disease">Disease</label>
                           <input type="text" name="disease" Placeholder="Enter The Disease You Have" id="disease" required>
                      </div>

                      <div class="class4">
                        <label for="blood">Blood Type</label>
                        <select name="blood" id="blood" required>
                            <option value="">Select Blood Type</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                     
                    <div class="class4">
                        <label for="unit">Blood Unit</label>
                        <input type="text" name="unit" Placeholder="Enter The Number Of Units" id="unit" required>
                   </div>

                    <div class="class4">

                          <input type="submit" name="submit" value="Send Request">
                    </div>
                     
                    
                    </form>
                </div>
            </div>
    </body>
</html>