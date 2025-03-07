<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connect to MySQL</title>
</head>
<body>
    <?php // Script 12.2 - mysqli_connect.php #2
    /* This script connects to the MySQL database. */

    // Attempt to connect to the MySQL and print messages:
    if ($dbc = @mysqli_connect('localhost', 'root', '', 'myblog')) {

        print '<p>Successfully connected to the database!</p>';

        mysqli_close($dbc); // Close the connection.

    } else {
        
        print '<p style="color: red;">Could not connect to the database:
		<br>' . mysqli_connect_error() . '.</p>';
    }

    ?>
    
</body>
</html>