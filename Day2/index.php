<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="">
    <input type="text" placeholder="First Name"/>
    <input type="text" placeholder="Last Name"/>

    <select>
        <?php
        $day = "<option>Day</option>";
        for ($i = 1; $i <= 31; $i++) {
            $day .= "<option>" . $i . "</option>";
        }
        echo $day;
        ?>
    </select>

    <select>
        <?php
        $month = "<option>Month</option>";
        for ($i = 1; $i <= 12; $i++) {
            $month .= "<option>" . $i . "</option>";
        }
        echo $month;
        ?>
    </select>

    <select>
        <?php
        $year = "<option>Year</option>";
        for ($i = 1876; $i <= 2026; $i++) {
            $year .= "<option>" . $i . "</option>";
        }
        echo $year;
        ?>
    </select>
</form>

<hr>

<?php
$degree = 92;

if ($degree >= 90) {
    echo "<h3>Congratulations, You Got Degree A+</h3>";
} else if ($degree >= 80) {
    echo "<h3>Congratulations, You Got Degree A</h3>";
} else if ($degree >= 70) {
    echo "<h3>Congratulations, You Got Degree B</h3>";
} else {
    echo "<h3>Sorry, Good Luck Next Year</h3>";
}
?>

<?php
echo "<table border='1'>";
for ($y = 1; $y <= 8; $y++) {
    echo "<tr>";
    for ($x = 1; $x <= 5; $x++) {
        echo "<td>" . ($x * $y) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>