<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>calendar</title>
</head>
<body>
<form action="calendar.php" method="post">
    <?php // Script 2.6 - calendar.php
    $months = [1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    //make the months pull-down menu
    echo '<select name="month">';
    foreach ($months as $key => $value) {
        echo "<option value=\"$key\">$value</option>\n";
    }
    echo '</select>';

    //make the days pull-down menu
    echo '<select name="day">';
    for ($day = 1; $day <= 31; $day++) {
        echo "<option value=\"$day\">$day</option>\n";
    }
    echo '</select>';

    //make the years pull-down menu
    echo '<select name="year">';
    for ($year = 2017; $year <= 2027; $year++) {
        echo "<option value=\"$year\">$year</option>\n";
    }
    echo '</select>';

    ?>
    </form>
</body>
</html>