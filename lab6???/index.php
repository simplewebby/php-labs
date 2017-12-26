<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div id="center">

  <form action="picArray.php" method="post">
    <h2>READY TO WIN AN AMAZING PRIZE???</h2>
  <input type="hidden" name="action" value="process_data">

  <br>
  <label>Please, enter any number between 1 and 6 in order to win a prize: </label> <br>
  <input id ="pic" type="text" name="num" value="<?php echo htmlspecialchars($num);
   ?>">
  <label>&nbsp;</label>
  <input id="button" type="submit" value="Submit">

  <h3>Message:</h3>
  <p><?php echo nl2br(htmlspecialchars($message)); ?></p>
</form>
</div>
</body>
</html>
