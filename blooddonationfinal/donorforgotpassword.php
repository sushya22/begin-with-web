<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="forgotpassword.css">
    </head>
    <body>

        <div class="class3">
            <h2>Change Your Password</h2>
        </div>
        <div class="container">

            <form action="donorforgotpasswordback.php" method="post">
            <div class="class2">
             <label>
                 Username
             </label>

             <input type="text" name="username" placeholder="Enter The Username" required>
            </div>

            <div class="class2">
                <label>
                    Password
                </label>
   
                <input type="password" name="password" placeholder="Enter The Password" required>
            </div>

            <div class="class2">
                <label>
                    Confirm Password
                </label>
   
                <input type="password" name="cpassword" placeholder="Re-Enter The Password" required>
            </div>

            <input type="submit" name="submit" value="change password">
             
        </form>
        </div>

        <div class="class10">
<h2 id="id9"> <?php if(isset($_GET['error']))
{
  echo $_GET['error'];
}
?>
</div>
    </body>
</html>