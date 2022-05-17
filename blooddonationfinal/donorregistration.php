<!DOCTYPE html>
<html>
    <head>
      <title>
          Donor login
      </title>

      <link rel="stylesheet" href="donorregistrationstyle.css">
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

                    <h2> <?php if(isset($_GET['error']))
                             
                        {
                            echo $_GET['error'];
                        }
                        ?>
                        </h2>
                    <form action="donorregistrationback.php" method="post">

                      
                       
                      <div class="class4">
                           <label for="did">Donor Id</label>
                           <input type="number" name="did" Placeholder="Enter Donor Id" id="did" required>
                      </div>

                      <div class="class4">
                        <label for="name">Donorname</label>
                        <input type="text" name="dname" Placeholder="Enter The Name" id="name" required>
                    </div>

                    <div class="class4">
                        <label for="dage">Donor Age</label>
                        <input type="number" name="dage" Placeholder="Enter The Age" id="dage" required>
                    </div>

                    <div class="class4">
                        <label for="blood">Donor Blood Group</label>
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
                        <label for="phone">Donor Contact</label>
                        <input type="number" name="phone" Placeholder="Enter The Contact Number" id="phone" required>
                    </div>

                    <div class="class4">
                        <label for="addr">Donor Address</label>
                        <input type="text" name="address" Placeholder="Enter The Address" id="addr" required >
                    </div>

                    <div class="class4">
                        <label for="uname">Username</label>
                        <input type="text" name="username" Placeholder="Enter The Username" id="uname" required>
                    </div>

                    <div class="class4">
                        <label for="pass">Password</label>
                        <input type="password" name="password" Placeholder="Enter The Password" id="pass" required>
                    </div>

                    <div class="class4">
                        <label for="cpass">Re-enter Password</label>
                        <input type="password" name="cpassword" Placeholder="Re-Enter The Password" id="cpass" required>
                    </div>


                    <div class="class4">
                          <input type="submit" name="submit" value="Register">
                    </div>
                     
                    
                    </form>
                </div>
            </div>
    </body>
</html>