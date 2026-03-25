<?php
include 'db.php';
include 'functions.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // 1. Marrim emrin e studentit para se ta fshijmë (Requirement: PDO Fetch)
    $stmtName = $pdo->prepare("SELECT name FROM students WHERE id = ?");
    $stmtName->execute([$id]);
    $student = $stmtName->fetch();

    if ($student) {
        $emri = $student['name'];

        // 2. E shënojmë në students.txt (Requirement: File Handling)
        logDeleteToTxt($emri);

        // 3. E fshijmë nga databaza
        $sql = "DELETE FROM students WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        
        if ($stmt->execute([$id])) {
            header("Location: index.php?status=deleted");
        } else {
            header("Location: index.php?status=error");
        }
    } else {
        header("Location: index.php?status=error");
    }
}
?>