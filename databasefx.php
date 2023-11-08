<?php

$dbc=mysqli_connect("localhost," , "root" , "" , "Creative-Unit-Production-Tracking-System");
if(mysqli_connect_errno())
    {
        echo"Database Connection Error" .mysqli_connect_error($dbc);
    }

?>