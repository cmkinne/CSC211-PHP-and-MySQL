<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Feedback</title>
</head>
<body>
<?php // Script 3.3 handle_form.php

// This page receives the data from feedback.html.
// It will receive: first name, last name, email, response, comments,
// and submit in $_POST.

// Create shorthand versions of the variables:
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$response = $_POST['response'];
$comments = $_POST['comments'];

// Print the received data:
print "<p>Thank you, $f_name $l_name, for your comments.</p>
<p>You stated that you found this example to be '$response' and
added:<br>$comments</p>";

?>
</body>
</html>