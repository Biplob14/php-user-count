<?php include "config.php" ?>

<?php
    // adding new visitors
    $visitor_ip = $_SERVER['REMOTE_ADDR'];

    // checking if visitor is unique
    $query = "SELECT * FROM counter_table WHERE ip_address = '$visitor_ip' ";
    $result = mysqli_query($connection, $query);

    // checking queey error
    if (!$result)
        die("Retriving query error<br>" . $query);

    $total_visitors = mysqli_num_rows($result);
    if ($total_visitors < 1) {
        $query = "INSERT INTO counter_table(ip_address) VALUES('$visitor_ip') ";
        $result = mysqli_query($connection, $query);
    }

    // retriving existing visitors
    $query = "SELECT * FROM counter_table";
    $result = mysqli_query($connection, $query);

    // checking query error
    if(!$result)
        die("Retriving query error-<br>".$query);

    $total_visitors = mysqli_num_rows($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet"> <!--font -->
    <link rel="stylesheet" href="style.css">
    <title>user count</title>
</head>
<body>
    <div class="wrapper">
        <h1>Visitor Count</h1>
        <h3><?php echo $total_visitors ?></h3>
    </div>
</body>
</html>