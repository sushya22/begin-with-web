<?php

session_start();


$server="localhost";
$username="root";
$password="";
$dbname="blood";

$con=mysqli_connect($server,$username,$password,$dbname);

$query1="select donateblood.did, donor.dname, donateblood.disease, donateblood.bloodtype, donateblood.unit from donateblood,donor where donateblood.did=donor.did";
$run1=mysqli_query($con,$query1);

$data1=mysqli_num_rows($run1);



?>




<!DOCTYPE html>
<html>
    <head>
      <title>
          Donor Requests
      </title>

      <link rel="stylesheet" href="donorrequestfinal.css">
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

                    <h2>Donor Requests</h2>

                   <table class="classtable">
                       <thead>
                           <tr>
                               <th>
                                   Donor Id
                               </th>
                               <th>
                                    Donor Name
                               </th>
                               <th>
                                    Disease
                               </th>
                               <th>
                                Blood Type
                           </th>

                           <th>
                            Units
                       </th>
                       <th colspan=2>
                        Status
                   </th>
                           </tr>
                       </thead>

                       <tbody>

                       <?php

                             while($row1=mysqli_fetch_row($run1))

                             {

                                   

                                ?>
                             
                           <tr>
                               <td>
                                   <?php
                                         echo $row1[0];
                                   ?>
                               </td>
                               <td>
                               <?php
                                         echo $row1[1];
                                   ?>
                               </td>
                               <td>
                               <?php
                                         echo $row1[2];
                                   ?>
                            </td>
                            <td>
                                
                            <form action="accepteddonorinsert.php" method="post">

<input type="hidden" name="blood" value="<?php echo $row1[3];?>">
                            <?php
                                         echo $row1[3];
                                   ?>
                            </td>

                            <td>

                            
<input type="hidden" name="unit" value="<?php echo $row1[4];?>">
                            <?php
                                         echo $row1[4];
                                   ?>
                            </td>

                            <td >

                            
                                <input type="hidden" name="did" value="<?php echo $row1[0];?>">
                                <input type="submit" name="approve" value="aprrove" id="id100">
                             </td>
                                <td>
                                <input type="submit" name="reject" value="reject" id="id200">
                             </td>
                            </form>
                            
                           </tr>

                           <?php

                             }

                             ?>
                       </tbody>
                   </table> 
                   
                </div>

                <p><button type="submit" id="buttonid2"><a href="#">LogOut</a></button></p>

            </div>
    </body>
</html>