<?php
    include_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDS Group Exercise</title>
</head>
<body>
    <?php 
        $name="Joshua Morris";
        echo "My name is: $name <br><br>";

        for ($i = 0; $i <= 5; $i++) {
            echo "The number is: $i <br><br>";
        }

        echo "Today it is ";
        echo date('l');
        echo "<br><br>";
        echo "and the month is ";
        echo date('F')."<br><br>";

        $rand = rand(0, 99);
        echo "A random number: <b> $rand </b><br><br>";

        if (!isset($_COOKIE['NumVisits'])) {
            $_COOKIE['NumVisits'] = 0; 
        }

        $numvisits = $_COOKIE['NumVisits'] + 1;
        setcookie('NumVisits',$numvisits,time() + 3600*24*365);

        if ($numvisits > 1) {
            echo "You've visited this Web page $numvisits times. \n";
        } else {
            echo "Welcome! This is the first time you are visiting this Web page. \n";
        }
        
        $fs = disk_free_space("/");
        echo "<br><br>Available Space in bytes: $fs <br><br>";

        session_start(); 
        $sessionid = session_id();
        echo "$sessionid is your sessionid.";


        $timeout = 30;
        if (!isset($_SESSION['expire'])) {
            $_SESSION['expire'] = time() + $timeout * 60;
        }
        echo "<p> Default Timeout is $timeout minutes. </p>";
        $countdown = abs($_SESSION['expire'] - time())/60;
        echo "<p> Timeout is now $countdown minutes.";

        $sql = "SELECT * FROM customers;";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table border=1>";
            echo "<th> Company </th>";
            echo "<th> Last Name </th>";
            echo "<th> First Name </th>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['company']."</td>";
                echo "<td>".$row['first_name']."</td>";
                echo "<td>".$row['last_name']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }

    ?>


</body>
</html>