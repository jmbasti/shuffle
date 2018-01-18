
<!--CODE TO CONNECT TO MySQL DATABASE-->

<?php
    ob_start(); // turns on output buffering
    session_start(); // will keep track if login
    $timezone = date_default_timezone_set("Asia/Manila"); //to check on the time zones http://php.net/manual/en/timezones

    $con = mysqli_connect("localhost", "root", "", "shuffle"); //(servername, username, password, databasename)

    if(mysqli_connect_errno()) {
        echo "Failed to connect:" . mysqli_connect_errno();
    }
?>