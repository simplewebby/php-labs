


<?php
// get the data from the form
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone');
$heard_from = filter_input(INPUT_POST, 'heard_from');
$contact_via= filter_input(INPUT_POST, 'contact_via');
$wants_updates = filter_input(INPUT_POST, 'wants_updates');

$comments = filter_input(INPUT_POST, 'comments');


// for the heard_from radio buttons,
// display a value of 'Unknown' if the user doesn't select a radio button
if ($heard_from) {
    $heard_from = $heard_from;
} else {
    $heard_from = 'unknown';
}

$wants_updates = $wants_updates? 'Yes':'No';




// for the wants_updates check box,
// display a value of 'Yes' or 'No'
$wants_updates = $wants_updates ? 'Yes': 'No';



?>
<!DOCTYPE html>
<html>
    <head>
        <title>Account Information</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
        <main>
            <h1>Account Information</h1>

            <label>Email Address:</label>
            <span><?php echo htmlspecialchars($email); ?></span><br>

            <label>Password:</label>
            <span><?php echo htmlspecialchars($password); ?></span><br>

            <label>Phone Number:</label>
            <span><?php echo htmlspecialchars($phone); ?></span><br>

            <label>Heard From:</label>
            <span><?php echo htmlspecialchars($heard_from); ?></span><br>

            <label>Send Updates:</label>
            <span><?php echo htmlspecialchars($wants_updates); ?></span><br>

            <label>Contact Via:</label>
            <span><?php echo htmlspecialchars($contact_via); ?></span><br><br>

            <span>Comments:</span><br>
            <span><?php echo nl2br(htmlspecialchars($comments)); ?></span><br>
        </main>
    </body>
</html>
