<?php include 'db.php'; ?>
<h2>Student List</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Action</th>
    </tr>
    <?php
    $stmt = $pdo->query("SELECT * FROM students");
    $students = $stmt->fetchAll();

    // Logic: Foreach loop
    foreach ($students as $row) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['age']}</td>
                <td><a href='delete_students.php?id={$row['id']}'>Delete</a></td>
              </tr>";
    }
    ?>
</table>
<br>
<a href="index.php">Back Home</a>

<head>
    <link rel="stylesheet" href="style.css">
<head>