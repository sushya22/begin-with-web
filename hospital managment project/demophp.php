<?php
     
     $servername="localhost";
     $dbname="student";
     $user="root";
     $password="";

     $conn=mysqli_connect($servername,$user,$password,$dbname);

     if($conn)
     {
         echo "success";
         $name=$_POST['name'];
         $age=$_POST['age'];

         if(isset($_POST['submit']))
         {
             $query="insert into stud(name,age) values('$name','$age')";
             $data=mysqli_query($conn,$query);
             if($data)
             {
                 echo "inserted successfully";
             }

             else
             {
                 echo "failed to insert";
             }
         }
     }

     else
     {
         echo "failed";

     }

?>