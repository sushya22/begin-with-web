<?php

session_start();
session_unset();
session_destroy();

if(true)
{
    header("location:blooddonationhomepage.php");
    exit();
}

?>