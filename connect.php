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
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['genderr'];
    $telephone = $_POST['telephone'];
    $password = $_POST['password'];

    // Corrected SQL statement with matching column names.
    $sql = "INSERT INTO data(id, name, email, gender, mobile, password) VALUES (:id, :name, :email, :gender, :telephone, :password)";

    try {
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        header("Location: add.php");    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>