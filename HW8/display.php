

<!DOCTYPE html>
<html>
<head>
<title> Retrieved data</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Retrieved  <span>data</span></h1>
  <h2>Database of Famous Programmers </h2>
  <div id="content" class="container">

<?php
foreach ($result as $key) : ?>

   <?php echo'Id: '.' ' .$key['personID'];?>
   <?php echo 'First Name: '.' ' .$key['firstName'];?>
     <?php echo 'Last Name: '.' ' .$key['lastName'];?>
       <?php echo 'Age: '.' ' .$key['age'];?>
         <?php echo 'State: '.' ' .$key['state'];?> <br>

<?php endforeach; ?>


<p><a href=".?showall=false">Back to search</a></p>

</div>
</body>
</html>
