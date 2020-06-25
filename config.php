<!-- database connection configuration -->
<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $databaseName = "user-count";

    $connection = mysqli_connect($hostname, $user, $password, $databaseName) or die("User Error: Unable to connect to database");
    // if (mysqli_connect_errno()) {
    //     die ("Error connection to the database");
    // }

?>