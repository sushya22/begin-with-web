<!DOCTYPE html>
<html>
    <head>
         <title>registration form</title>
         <link rel="stylesheet" href="doctorreg.css">
    </head>
    <body>
        <div class="container">

        <div class="class1" >
                <h2 id="id9"> <?php if(isset($_GET['error']))
                             
                             {
                                 echo $_GET['error'];
                             }
                             ?>
                             </h2>
            </div>

            <div class="class1" id="id1">
                <h2>Registration form</h2>
            </div>
            
            <form action="patientregistrationback.php" method="post">
                <div class="class1">
                    <label>
                        Patient Id
                    </label>
                    <input type="number" name="pid" palceholder="Enter Patient Id">
                </div>
                <div class="class1">

                    <label>
                        Patient Name
                    </label>
                    <input type="text" name="pname" palceholder="Enter Patient Name">
                </div>
                <div class="class1">

                    <label>
                        Patient Age
                    </label>
                    <input type="number" name="page" palceholder="Enter Patient Age">
                </div>

                <div class="class1">
                    <b>Gender&nbsp;&nbsp;&nbsp;&nbsp;</b>
                   <b>Male:</b>  <input type="radio" name="gender" value="male">
                    <b>Female:</b>  <input type="radio" name="gender" value="Female">
                </div>
                <div class="class1">
                    <label>
                    Patient Address
                    </label>
                    <input type="number" name="paddr" palceholder="Enter Patient Address">
                </div>
                <div class="class1">
                    <label>
                        Patient Contact
                    </label>
                    <input type="text" name="pphone" palceholder="Enter Patient Contact Number">
                </div>
              
                <div class="class1">
                    <label>
                        Username
                    </label>
                    <input type="text" name="username" palceholder="Enter Username">
                </div>
                <div class="class1">
                    <label>
                        Password
                    </label>
                    <input type="password" name="password" palceholder="Enter Password">
                </div>
                <div class="class1">
                    <label>
                        Re-enter Password
                    </label>
                    <input type="password" name="cpassword" palceholder="Re-Enter Password">
                </div>

                <input type="submit" name="submit" value="register" id="id2">
            </form>
        </div>
    </body>
</html>