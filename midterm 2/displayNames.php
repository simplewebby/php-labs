<?php session_start();?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Midterm</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<!-- the body section -->
<body>

  <header id="showcase">
    <h1>List of <span>Names</span></h1>
  </header>
<div id="content" class="container">

       <!-- Create table here use a foreach loop
       to fill table with data from array -->
         <div class="content">
       <table>

         <tr>
           <th> ID </th>
           <th> First Name </th>
           <th> Last Name </th>
           <th> State </th>
         </tr>

       <?php foreach($_SESSION['students']['info'] as $key => $value) : ?>
       <tr>
         <th><?php  echo  $value['id']?> </th>
       <th><?php  echo  $value['fname'] ?></th>
       <th><?php  echo  $value['lname'] ?> </th>
       <th><?php  echo  $value['state'] ?> </th>
       </tr>
       <?php endforeach; ?>

       </table>
         </div>
<!-- add code for the form here -->
       <p><a class="btn" href="addItem.html">Go Back to Add Name</a></p>

  </div>

</body>
</html>
