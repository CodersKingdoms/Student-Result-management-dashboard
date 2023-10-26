<?php

// DB credentials.
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'student');

// Establish database connection using PDO.
try {
    $dbh = new PDO("mysql:host=".DB_HOST.";dbname=" .DB_NAME, DB_USER, DB_PASS);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
$query = "SELECT * FROM data"; // Replace 'students' with your table name.
$result = $dbh->query($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet type="text/css" href="view.css">
    <title>Document</title>
    <style>
    body {
        height: 93vh;
    }

    button {

        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 5px;
        margin-bottom: 20px;
        margin-left: 20px;
        margin-right: 20px;
        text-decoration: none;

    }

    a {
        color: azure;
        font-weight: bold;
    }
    </style>
</head>

<body>

    <h1> Admin Dashboard </h1>
    <center>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Telephone</th>

                <th>English</th>
                <th>Science</th>
                <th>Maths</th>
                <th>SST</th>
            </tr>
            <?php
            // Loop through the data and populate the HTML table.
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['mobile'] . "</td>";
                echo "<td>" . $row['english'] . "</td>";
                echo "<td>" . $row['science'] . "</td>";
                echo "<td>" . $row['maths'] . "</td>";
                echo "<td>" . $row['sst'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </center>
    <footer>
        <button onclick="location.href='main.html'">LOGOUT</button>
        <button onclick="location.href='add.php'">ADD Student</button>
        <button onclick="location.href='addmarks.php'">ADD MArks</button>
        <button onclick="location.href='admin.php'">HOME</button>
    </footer>
</body>


</html>