<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        function multiplication($multiplier) {
            $results = [];
            for ($i = 1; $i <= 12; $i++) {
                $results[] = $i * $multiplier;
            }
            return $results;
        }
        $multiplier = 2; // Example multiplier
        $results = multiplication($multiplier);
    ?>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php
            for ($i = 0; $i < count($results); $i++) {
                echo "<tr>";
                echo "<td>" . ($i + 1) . "</td>";
                echo "<td>" . $multiplier . "</td>";
                echo "<td>" . $results[$i] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
