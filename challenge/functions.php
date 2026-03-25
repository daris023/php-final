<?php
// Custom Function 1: Validate Input
function validateInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Custom Function 2: Logging to File
function logToFile($name, $email) {
    $file = fopen("students.txt", "a");
    $content = "New Student: $name ($email) added on " . date("Y-m-d H:i:s") . "\n";
    fwrite($file, $content);
    fclose($file);
}
?>

<head>
    <link rel="stylesheet" href="style.css">
<head>

<?php
// Funksioni ekzistues për shtim
function saveToTxt($name, $email, $age) {
    $file = fopen("students.txt", "a");
    $dataString = "SHTUAR: $name | $email | $age | " . date("Y-m-d H:i:s") . "\n";
    fwrite($file, $dataString);
    fclose($file);
}

// Funksioni i RI për fshirje
function logDeleteToTxt($name) {
    $file = fopen("students.txt", "a");
    $dataString = "FSHIRË: Studenti me emrin '$name' u hoq nga sistemi më " . date("Y-m-d H:i:s") . "\n";
    fwrite($file, $dataString);
    fclose($file);
}
?>