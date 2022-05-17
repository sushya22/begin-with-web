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
            
            <form action="doctorregistrationback.php" method="post">
                <div class="class1">
                    <label>
                        Doctor Id
                    </label>
                    <input type="number" name="id" placeholder="Enter Doctor Id">
                </div>
                <div class="class1">

                    <label>
                        Doctor Name
                    </label>
                    <input type="text" name="name" placeholder="Enter Doctor Name">
                </div>
                <div class="class1">

                    <label>
                        Doctor Age
                    </label>
                    <input type="number" name="age" placeholder="Enter Doctor Age">
                </div>
                <div class="class1">
                    <label>
                        Doctor Phone
                    </label>
                    <input type="number" name="phone" placeholder="Enter Contact Number">
                </div>
                <div class="class1">
                    <label>
                        Doctor Email
                    </label>
                    <input type="email" name="mail" placeholder="Enter Email Id">
                </div>
                <div class="class1">
                    <label>
                        Doctor Qualification
                    </label>
                    <input type="text" name="qualif" placeholder="Enter Qualification">
                </div>
                <div class="class1">
                    <label>
                        Doctor Speciality
                    </label>
                    <input type="text" name="speciality" placeholder="Enter Speciality">
                </div>
                <div class="class1">
                    <label>
                        Hospital Id
                    </label>
                    <input type="number" name="hid" placeholder="Enter Hospital Id">
                </div>

                <div class="class1">
                    <label>
                        Hospital Name
                    </label>
                    <input type="text" name="hname" placeholder="Enter Hospital Name">
                </div>

                <div class="class1">
                    <label>
                        Hospital Address
                    </label>
                    <input type="text" name="haddress" placeholder="Enter Hospital Address">
                </div>

                <div class="class1">
                    <label>
                        Hospital Landmark
                    </label>
                    <input type="text" name="area" placeholder="Enter Hospital Landmark">
                </div>
                <div class="class1">
                    <label>
                        Hospital Contact Number
                    </label>
                    <input type="number" name="hphone" placeholder="Enter Hospital Phone Number">
                </div>
                <div class="class1">
                    <label>
                        Hospital Timing
                    </label>
                    <input type="text" name="time" placeholder="Enter Hospital Timing">
                </div>

                <div class="class1">
                    <label>
                        Username
                    </label>
                    <input type="text" name="username" placeholder="Enter Username">
                </div>

                <div class="class1">
                    <label>
                        Password
                    </label>
                    <input type="password" name="password" placeholder="Enter Password">
                </div>

                <div class="class1">
                    <label>
                        Re-enter password 
                    </label>
                    <input type="password" name="cpassword" placeholder="Re-enter Password">
                </div>

                <input type="submit" name="submit" value="register" id="id2">
            </form>
        </div>
    </body>
</html>