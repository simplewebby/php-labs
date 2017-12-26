<?php
    // get the data from the form
    $num = filter_input(INPUT_POST, 'num');
    $sum = 0;

    function SumOfNumbers($num){
      if ($num >=0 && $num <=1000) {

      while ($num > 0)
{
    $sum= $sum + ($num % 10);
    $num= $num / 10;
}


}else {
  echo "Invalid input!!!";
}
return $sum;
}
?>
<!DOCTYPE html>
<html>

<head>

    <title>Sum of Numbers</title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <h1 class="brand"><span>SUM </span>of NUMBERS </h1>
    <div class="container">

  <div class="contact">
        <label>The sum of <?php echo $num; ?> is:</label>
        <span><?php echo SumOfNumbers($num); ?></span>
        <br>

          <div>
    </div>
</body>
</html>
