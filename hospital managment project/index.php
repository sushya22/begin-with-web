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

        <?php if(isset($_GET['error'])) {?>

            <p class="error"><b><?php echo $_GET['error']; ?> </b></p>
            <?php } ?>

        <div class="container">
        <form method="post" action="indexback.php">
            <div class="class1">
                <label class="class3" for="did">Doctor Id</label>
                <input type="text" name="did" placeholder="enter doctor id" id="did" required>
            </div>

            <div class="class1">
                <label class="class3" for="dname">Doctor Name</label>
                <input type="text" name="dname" placeholder="enter doctor name" id="dname" required>
            </div>


            <div class="class1">
                <label class="class3" for="dage">Doctor Age</label>
                <input type="number" name="dage" placeholder="enter doctor age" id="dage" required>
            </div>


            <div class="class1">
                <label class="class3" for="dqualification">Doctor qualification</label>
                <input type="text" name="dqualif" placeholder="enter doctor qualification" id="dqualification" required>
            </div>

            <div class="class1">
                <label class="class3"  for="dspecial">Doctor Speciality</label>
                <input type="text" name="dspecial" placeholder="enter doctor speciality" id="dspecial" required>
            </div>

            <div class="class1">
                <label class="class3"  for="phone">Doctor phone number</label>
                <input type="number" name="dnumber" placeholder="enter doctor mobile number" id="phone" required>
            </div>

            <div class="class1">
                <label class="class3" for="demail">Doctor email</label>
                <input type="email" name="dmail" placeholder="enter doctor email" id="demail" required>

            </div>

            <div class="class1">
                <label for="hid">hospital Id</label>
                <input type="number" placeholder="enter hospital id" name="hid" id="hid" required>
            </div>

            
            <div class="class1">
                <label for="hname">hospital name</label>
                <input type="text" placeholder="enter hospital name" name="hname" id="hname" required>
            </div>

                <div class="class1">
                <label for="haddr">hospital address</label>
                <input type="text" placeholder="enter hospital address" name="haddr" id="haddr" required>
            </div>

                <div class="class1">
                <label for="harea">hospital Area</label>
                <input type="text" placeholder="enter hospital area" name="harea" id="harea" required>
            </div>
           
                <div class="class1">
                <label for="htime">hospital time</label>
                <input type="text" placeholder="enter hospital time" name="htime" id="htime" required>
            </div>

                <div class="class1">
                <label for="hphone">hospital phone</label>
                <input type="number" placeholder="enter hospital number" name="hphone" id="hphone" required>
            </div>

            <div class="class1">
                <label class="class3" for="user">enater username</label>
                <input type="text" name="duser" placeholder="enter username" id="user" required>
            </div>

            <div class="class1">
                <label class="class3" for="pass">enter password</label>
                <input type="password" name="dpass" placeholder="enter password" id="pass" required>
            </div>

            <div class="class1">
                <label class="class3" for="cpass">confirm password</label>
                <input type="password" name="dcpass" placeholder="confirm password" id="cpass" required>
            </div>

            <input type="submit" value="next" name="button">

            

            

        </form>

        </div>

        
    </body>
</html>