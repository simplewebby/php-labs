<!DOCTYPE html>
<html>
<head>

    <title>Pizza Order Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>

    <main >
    <h1>Pizza Order Form</h1>

    <form  action="order_result.php" method="post">

    <fieldset >
    <h2>Sing Up</h2>
        <label class="signup">Last Name:</label>
        <input class="signup"type="text" name="lname" value="" class="textbox">
        <br>

        <label class="signup"><i class="fa fa-phone" aria-hidden="true" > </i>   Phone: </label>
        <input class="signup"type="text" name="phone" value="" class="textbox">
        <br>

        <label class="signup"> <i class="fa fa-envelope" aria-hidden="true"></i>   E-mail:</label>
        <input class="signup"type="text" name="email" value="" class="textbox">
    </fieldset>


    <fieldset>
  <h2>Welcome </h2>

        <p>What size of pizza would you like?</p>
        <input type="radio" name="pizza_size" value="Small">
        Small<br>
        <input type="radio" name="pizza_size" value="Medium">
        Medium<br>
        <input type=radio name="pizza_size" value="Large">
       Large<br>

       <p>What Toppings would you like ?</p>
        <input type="radio" name="toppings" value="Pepperoni">
       Pepperoni<br>
        <input type="radio" name="toppings" value="Plain">
       Plain<br>
        <input type=radio name="toppings" value="Mushroom">
       Mushroom<br>
        <input type=radio name="toppings" value="Spinach">
      Spinach<br>

      <p>Card Payment Options:</p>
      <p>No cash payments</p>
        <input type="radio" name="card_type" value="Visa">
      Visa<br>
        <input type="radio" name="card_type" value="Mastercard">
      Master Card<br>
        <input type=radio name="card_type" value="Discover">
      Discover<br>

      <p>Would you like us to deliver?</p>
        <input type="checkbox" name="wants_delivery " >YES, I'd like pizza to be delivered .<br>



        <p>Comments:</p>
        <textarea name="comments" rows="4" cols="50"></textarea>
    </fieldset>

    <input id="submit"type="submit" value="Submit">
    <br>

    </form>

    </main>

</body>
</html>
