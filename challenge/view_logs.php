<div class="container">
    <h2>Historiku i Sistemit (students.txt)</h2>
    <?php
    $lines = file("students.txt");
    foreach (array_reverse($lines) as $line) {
        // Kontrollojmë nëse rreshti përmban fjalën FSHIRË apo SHTUAR
        $class = "";
        if (strpos($line, 'FSHIRË') !== false) { $class = "log-delete"; }
        if (strpos($line, 'SHTUAR') !== false) { $class = "log-add"; }

        echo "<div class='log-item $class'>" . htmlspecialchars($line) . "</div>";
    }
    ?>
</div>