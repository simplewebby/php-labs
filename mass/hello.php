<?php
    // get the data from the form
    $name = filter_input(INPUT_POST, 'name');
    $weight = filter_input(INPUT_POST, 'weight');
    $height = filter_input(INPUT_POST, 'height');

    // calculate the discount and discounted price
    //$metricW = $weight *  0.45;
    //$metricH = $height *0.025;
    //$answer = $metricH * $metricH;
    //$result = $metricW / $answer;
$resultMetric = ($weight/($height * $height));
$resultMetric = $resultMetric *10000;
$resultMetric = round ($resultMetric, 1);

?>
<!DOCTYPE html>
<html>

<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <h1>Body Mass Index Calculator</h1>

        <label>Your name is:</label>
        <span><?php echo htmlspecialchars($name); ?></span>
        <br>

        <label>Your weight is :</label>
        <span><?php echo htmlspecialchars($weight); ?></span>
        <br>

        <label>Your height is :</label>
        <span><?php echo htmlspecialchars($height); ?></span>
        <br>

        <label>Your BMI is:</label>
        <span><?php echo $resultMetric; ?></span>
        <br>
        <h3>Underweight: Your BMI is less than 18.5</3>
          <h3>Healthy weight: Your BMI is 18.5 to 24.9</h3>
          <h3 id="over">Overweight: Your BMI is 22.5 to 29.9</h3>
          <h3 id="sos">Obese: Your BMI is 30 or higher</h3>
        <br>
    </main>
</body>
</html>
