<!-- Create an array of 15 high temperatures, approximating the weather for a spring month,
then find the average high temp, the five warmest high temps Display the result on the browser. -->
<!DOCTYPE html>
<html>

<head>
    <title>Spring Weather</title>
</head>

<body>
    <h2>Spring Weather Data</h2>
    <?php
    $highTemperatures = [60, 65, 68, 72, 74, 76, 78, 80, 82, 85, 80, 75, 70, 68, 63];
    $averageTemperature = array_sum($highTemperatures) / count($highTemperatures);
    rsort($highTemperatures);
    echo "<p>Average High Temperature: " . number_format($averageTemperature, 2) . "°F</p>";
    echo "<p>Five Warmest High Temperatures:</p>";
    echo "<ul>";
    for ($i = 0; $i < 5; $i++) {
        echo "<li>" . $highTemperatures[$i] . "°F</li>";
    }
    echo "</ul>";
    ?>
</body>

</html>