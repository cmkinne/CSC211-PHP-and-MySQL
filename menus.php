<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Date Menus</title>
</head>
<body>
    <?php // Script 10.1 - menus.php
    /* This script defines and calls a function */

    // This function makes three pull-down menus for the months, days, and years.
    function make_date_menus() 
    {
        // Array to store the months
        $months = [1 => "January", 2 => "February", 3 => "March", 4 => "April", 5 => "May", 6 => "June", 7 => "July", 8 => "August", 9 => "September", 10 => "October", 11 => "November", 12 => "December", ];

        // Make the month pull-down menu:
        print '<select name="month">';
        foreach ($months as $key => $value) {
            print "\n<option value=\"$key\">$value</option>";
        }
        print '<select>';

        // Make the day pull-down menu
        print '<select name="day">';
        for ($day = 1; $day <= 31; $day++) {
            print "\n<option value=\$day\">$day</option>";
        }
        print '<select>';
        
        // Make the year pull-down menu
        print '<select name="year">';
        $start_year = date('Y');
        for ($y = $start_year; $y <= ($start_year + 10); $y++) {
            print "\n<option value=\"$y\">$y</option>";
        }
        print '<select>';
    } // End of make_date_menus() function

    // Make the form:
        print '<form action="" method="post">';
        make_date_menus();
        print '</form>';

    ?>
    
</body>
</html>