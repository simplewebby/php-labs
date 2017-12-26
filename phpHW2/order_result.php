<?php
// get the data from the form
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone');
$pizza_size= filter_input(INPUT_POST, 'pizza_size');
$card_type = filter_input(INPUT_POST, 'card_type');
$wants_delivery = filter_input(INPUT_POST, 'wants_delivery');
$comments = filter_input(INPUT_POST, 'comments');
$toppings = filter_input(INPUT_POST, 'toppings');
 //type of pizza
if ($pizza_size) {
    $pizza_size = $pizza_size;
} else {
    $pizza_size = 'unknown';
}


//  wants  delivery

if (( isset ($_POST['wants_delivery']) )== true){
  $wants_delivery = "Yes";
} else {
$wants_delivery = "No";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Order Form</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <main>

            <h1>Your Order </h1>

            <label>Last Name: </label>
            <span><?php echo htmlspecialchars($lname); ?></span><br>

            <label>Phone Number: </label>
            <span><?php echo htmlspecialchars($phone); ?></span><br>

            <label>E-mail: </label>
            <span><?php echo htmlspecialchars($email); ?></span><br>

            <label>Pizza Size: </label>
            <span><?php echo htmlspecialchars($pizza_size); ?></span><br>

            <label>Type of Toppings :</label>
            <span><?php echo htmlspecialchars($toppings); ?></span><br>

            <label>Payment Options: </label>
            <span><?php echo htmlspecialchars($card_type); ?></span><br>

            <label>Delivery: </label>
            <span><?php echo htmlspecialchars($wants_delivery); ?></span><br><br>

            <span>Comments:  </span><br>
            <span><?php echo nl2br(htmlspecialchars($comments)); ?></span><br>
       <h2>Thank you!</h2>
        </main>
    </body>
</html>
