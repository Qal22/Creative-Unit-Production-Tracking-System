<?php

$dbc2 = mysqli_connect("localhost:3307", "root", "", "stocksys");
if (mysqli_connect_errno()) {
    echo "Database Connection Error" . mysqli_connect_error($dbc);
}
?>
