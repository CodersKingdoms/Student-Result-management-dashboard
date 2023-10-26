<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

// Retrieve user-specific data from the database using the rollno stored in the session
$rollno = $_SESSION['user'];

// Your database connection code
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

// Query to retrieve student details based on the rollno
$query = "SELECT * FROM data WHERE id = :rollno";
$stmt = $dbh->prepare($query);
$stmt->bindParam(':rollno', $rollno);
$stmt->execute();

if ($stmt->rowCount() == 1) {
    $studentData = $stmt->fetch(PDO::FETCH_ASSOC);

    // Now, you can populate the HTML elements with the student's data
    ?>

<?php
function calculateGrade($marks) {
    // Calculate the grade based on the marks
    if ($marks >= 90) {
        return 'A+';
    } elseif ($marks >= 80) {
        return 'A';
    } elseif ($marks >= 70) {
        return 'B';
    } elseif ($marks >= 60) {
        return 'C';
    } elseif ($marks >= 50) {
        return 'D';
    } else {
        return 'F';
    }
}
?>
<?php

// Calculate the total marks
$totalMarks = $studentData['english'] + $studentData['science'] + $studentData['maths'] + $studentData['sst'];
$percentage = $totalMarks / 4;
$grade = calculateGrade($percentage);

function result($percentage)
{
if ($percentage >= 33.3) {
    return 'Pass';
}
else{
    return 'Fail';
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="student.css">
    <title>Student Dashboard</title>
</head>

<body>
    <h1>Student Dashboard</h1>
    <div class="details">
        <h3>Student Details</h3>
        <p>Student Name: <span id="studentName"><?php echo $studentData['name']; ?></span></p>
        <p>Roll No: <span id="rollNo"><?php echo $studentData['id']; ?></span></p>
        <p>Email: <span id="class"><?php echo $studentData['email']; ?></span></p>
        <p>Gender: <span id="section"><?php echo $studentData['gender']; ?></span></p>
    </div>
    <center>
        <table>
            <tr>
                <th>Subject</th>
                <th>Total Marks</th>
                <th>Marks Gained</th>
                <th>Grade</th>
            </tr>
            <tr>
                <td>English</td>
                <td><span id="englishTotal">100</span></td>
                <td><span id="englishFinalTerm"><?php echo $studentData['english']; ?></span></td>
                <td><span id="englishGrade">
                        <?php
            $englishMarks = $studentData['english'];
            $englishGrade = calculateGrade($englishMarks);
            echo $englishGrade;
            ?>
                    </span></td>
            </tr>
            <tr>
                <td>Science</td>
                <td><span id="scienceTotal">100</span></td>
                <td><span id="scienceFinalTerm"><?php echo $studentData['science']; ?></span></span></td>
                <td><span id="scienceGrade">
                        <?php
            // Calculate the grade for Science and assign it to $scienceGrade
            $scienceMarks = $studentData['science'];
            $scienceGrade = calculateGrade($scienceMarks);
            echo $scienceGrade;
            ?>
                    </span></td>
            </tr>
            <tr>
                <td>Maths</td>
                <td><span id="mathsTotal">100</span></td>
                <td><span id="mathsFinalTerm"><?php echo $studentData['maths']; ?></span></span></td>
                <td><span id="mathsGrade">
                        <?php
            // Calculate the grade for Maths and assign it to $mathsGrade
            $mathsMarks = $studentData['maths'];
            $mathsGrade = calculateGrade($mathsMarks);
            echo $mathsGrade;
            ?>
                    </span></td>
            </tr>
            <tr>
                <td>Social Studies</td>
                <td><span id="socialStudiesTotal">100</span></td>
                <td><span id="socialStudiesFinalTerm"><?php echo $studentData['sst']; ?></span></span></td>
                <td><span id="socialStudiesGrade">
                        <?php
            // Calculate the grade for Social Studies and assign it to $socialStudiesGrade
            $socialStudiesMarks = $studentData['sst'];
            $socialStudiesGrade = calculateGrade($socialStudiesMarks);
            echo $socialStudiesGrade;
            ?>
                    </span></td>
            </tr>
        </table>



        <br>
        <div class="result">
            <h3 id="res">Overall Result</h3>
            <p class="res">Total Marks: <span id="totalMarks"><?php echo $totalMarks ?></span></p>
            <p class="res">Percentage: <span id="percentage"><?php echo $percentage ?></span></p>
            <p class="res">Grade: <span id="grade"></span><?php  $Grade = calculateGrade($percentage);
            echo $grade;?></p>
            <p class="res">Result: <span id="result"><?php echo result($percentage); ?></span></p>
        </div>
    </center>
    <!-- Rest of your HTML -->
</body>

</html>
<?php
} else {
    echo "Student not found.";
}

// Close the database connection
$dbh = null;
?>