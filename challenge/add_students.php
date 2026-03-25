<?php 
include 'db.php'; 
include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Logic: If/Else 
    if (!empty($_POST['name']) && !empty($_POST['email'])) {
        
        // Requirement: Store data in an array first
        $studentData = [
            'name'  => validateInput($_POST['name']),
            'email' => validateInput($_POST['email']),
            'age'   => (int)$_POST['age']
        ];

        // Insert into DB
        $sql = "INSERT INTO students (name, email, age) VALUES (?,?,?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$studentData['name'], $studentData['email'], $studentData['age']]);

        // Requirement: File Handling
        logToFile($studentData['name'], $studentData['email']);

        header("Location: index.php?status=added");
    }
}
?>

<form method="POST">
    <input type="text" name="name" placeholder="Full Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="number" name="age" placeholder="Age" required><br>
    <button type="submit">Add Student</button>
</form>

<head>
    <link rel="stylesheet" href="style.css">
<head>