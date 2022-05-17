<?php

$server="localhost";
$username="root";
$password="";
$dbname="blood";

$con=mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['approve']))
{
    $did=$_POST['did'];
    $blood=$_POST['blood'];
    $unit=$_POST['unit'];
    $query1="select bloodtype, unit from donorhelp where did='$did' and bloodtype='$blood'";
    $run1=mysqli_query($con,$query1);

    if($run1)
    {
        $data1=mysqli_num_rows($run1);
        if($data1>0)
        {   
            $data2=mysqli_fetch_assoc($run1);
            $unit1=$data2['unit'];
            $unit2=$unit1+$unit;
            $query2="update donorhelp set unit='$unit2' where did='$did' and bloodtype='$blood'";
            $run2=mysqli_query($con,$query2);
            if($run2)
            {
                $query20="select total from totalblood where bloodtype='$blood'";
                $run20=mysqli_query($con,$query20);

                if(mysqli_num_rows($run20)>0)
                 {  
                     $data20=mysqli_fetch_assoc($run20);
                     $unit20=$data20['total'];
                     $unit3=$unit+$unit20;
                     $query21="update totalblood set total='$unit3' where bloodtype='$blood' ";
                     $run21=mysqli_query($con,$query21);

                    if($run21)
                    {
                        echo "total updated";
                    }

                    else{
                        echo "error occured while updating total";
                    }
                 
                }

                else
                {
                    $query30="insert into totalblood values('$blood','$unit')";
                    $run30=mysqli_query($con,$query30);

                    if($run30)
                    {
                        echo "inserted in total";
                    }

                    else{
                        echo "error occured while inserting total";
                    }
                }


            }

            else
            {
                echo "error";
            }
        }

        else
        {
            $query3="insert into donorhelp values('$did','$blood','$unit')";
            $run3=mysqli_query($con,$query3);

            if($run3)
            {

                $query41="select total from totalblood where bloodtype='$blood'";
                $run41=mysqli_query($con,$query41);

                if(mysqli_num_rows($run41)>0)
                 {  
                     $data41=mysqli_fetch_assoc($run41);
                     $unit21=$data21['total'];
                     $unit4=$unit+$unit21;
                     $query42="update totalblood set total='$unit4' where bloodtype='$blood' ";
                     $run42=mysqli_query($con,$query42);

                    if($run42)
                    {
                        echo "total updated";
                    }

                    else{
                        echo "error occured while updating total";
                    }
                 
                }

                else
                {
                    $query43="insert into totalblood values('$blood','$unit')";
                    $run43=mysqli_query($con,$query43);

                    if($run43)
                    {
                        echo "inserted in total";
                    }

                    else{
                        echo "error occured while inserting total";
                    }
                }
                echo "donated";
            }

            else
            {
                echo "error";
            }
        }
    }

    $query4="delete from donateblood where did='$did' and bloodtype='$blood'";
    $run4=mysqli_query($con,$query4);

}


else
{
    if(isset($_POST['reject']))
    {
        $did=$_POST['did'];
        $blood=$_POST['blood'];


        $query10="delete from donateblood where did='$did' and bloodtype='$blood'";
        $run10=mysqli_query($con,$query10);

        
    }
}

?>