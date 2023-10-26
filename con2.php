<?php
session_start();
// DB credentials.
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'student');

// Establish database connection using PDO.
try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollno = $_POST['rollno'];
    $password = $_POST['password'];

    // SQL query to check if the roll number and password exist in the 'data' table
    $query = "SELECT * FROM data WHERE id = :rollno AND password = :password";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':rollno', $rollno);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
        // Successful login
        $_SESSION['user'] = $rollno;
        header("Location: student.php");
    } else {
        header("Location: main.php");
        echo "<script> alert(Invalid Roll No or password. Please try again.)</script>";
    }
}

// Close the database connection

?>