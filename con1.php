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

if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    try{
$newEnglishValue = $_POST['english'];
$newScienceValue = $_POST['science'];
$newMathsValue = $_POST['maths'];
$newSstValue = $_POST['sst'];
$id = $_POST['id'];
$sql = "UPDATE data
SET english = :english, science = :science, maths = :maths, sst = :sst 
WHERE id = :id";


        // Prepare the SQL statement
        $stmt = $dbh->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':english', $newEnglishValue, PDO::PARAM_STR);
        $stmt->bindParam(':science', $newScienceValue, PDO::PARAM_STR);
        $stmt->bindParam(':maths', $newMathsValue, PDO::PARAM_STR);
        $stmt->bindParam(':sst', $newSstValue, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Execute the update
        $stmt->execute();

        header("Location: addmarks.php");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>