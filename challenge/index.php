

<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Student Management System</h1>
    
    <nav>
        <a href="index.php">Dashboard</a>
        <a href="add_students.php">Shto Student</a>
        <a href="display_students.php">Lista e Studentëve</a>
        <a href="view_logs.php">Shiko Log-et (TXT)</a>
    </nav>

    <div class="container">
        <?php 
        if(isset($_GET['status'])) {
            switch($_GET['status']) {
                case 'added': echo "<p style='color:green; font-weight:bold;'>✅ Studenti u shtua me sukses!</p>"; break;
                case 'deleted': echo "<p style='color:red; font-weight:bold;'>🗑️ Studenti u fshi.</p>"; break;
            }
        }
        ?>
        <p>Mirësevini në sistemin tuaj të menaxhimit. Përdorni menunë lart për të lundruar.</p>
    </div>
</body>
</html>