<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>No Soup for You!</title>
</head>
<body>
    <h1>Mmm...soups</h1>
    <?php // Script 7.1 - soups1.php
    /* This script creates and prints out an array. */

    // Address error management, if you want.
    ini_set('display_errors', 1);

    // Create the arrray:
    $soups = [
        'Monday' => 'Clam Chowder',
        'Tuesday' => 'White Chicken Chili',
        'Wednesday' => 'Vegetarian',
        'Thursday' => 'Chicken Noodle',
        'Friday' => 'Tomato',
        'Saturday' => 'Cream of Broccoli',
	    'Sunday' => 'Zuppa Tuscana'
    ];

    // Print each key and value:
    foreach ($soups as $day => $soup) {
        print "<p>$day: $soup</p>\n";
    }

    ?>

</body>
</html>