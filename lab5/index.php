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
  <div class="container">
      <h1 class="brand"><span>Student </span>Info </h1>
      <div class="wrapper animated bounceInLeft">
        <div class="info">
          <h1>Student</h1>

            <h2> <i class="fa fa-bicycle" aria-hidden="true"></i></i> </h2>


        </div>
          <div class="contact">


            <form action="array.php" method="post">
              <div id="data">



                  <form action="." method="post">
                  <input type="hidden" name="action" value="process_data" autofocus >

                  <label>Name:</label>
                  <input type="text" name="name" autofocus
                         value="<?php echo htmlspecialchars($name); ?>">
                  <br>
                  <label>ID:</label>
                  <input type="text" name="id"
                         value="<?php echo htmlspecialchars($id); ?>">
                  <br>
                  <label>Address:</label>
                  <input type="text" name="address"
                         value="<?php echo htmlspecialchars($address); ?>">
                  <br>
                  <label>Major:</label>
                  <input type="text" name="major"
                         value="<?php echo htmlspecialchars($major); ?>">
                  <br>

                  <label>E-Mail:</label>
                  <input type="text" name="email"
                         value="<?php echo htmlspecialchars($email); ?>">
                  <br>

                  <label>Phone Number:</label>
                  <input type="text" name="phone"
                         value="<?php echo htmlspecialchars($phone); ?>">
                  <br>

                  <label>&nbsp;</label>
                  <input id="button" type="submit" value="Submit">
                  <br>

                  </form>
                  <h3>Array as String:</h3>
                  <h3><?php echo nl2br(htmlspecialchars($message1)); ?></h3>

                  <h1>Student Info:</h1>
                  <h1><?php echo nl2br(htmlspecialchars($message)); ?></h1>

            </form>
          </div>
        </div>
      </div>
    </div>

  </body>
  </html>
