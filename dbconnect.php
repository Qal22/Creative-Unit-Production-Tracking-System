<?php

$dbc2 = mysqli_connect("localhost", "root", "", "cup tracking");
if (mysqli_connect_errno()) {
    echo "Database Connection Error" . mysqli_connect_error($dbc);
}
?>
