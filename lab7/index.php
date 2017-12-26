
<?php
    require_once('expressions.php');
    $phone = filter_input(INPUT_POST, 'phone');
    $valPhone = "";
    $errPhone= $errCC=$errZip=$errEmail= " ";
    if(isset($phone)){
        if (isPhoneValid($phone)){
            $valPhone = " Phone is valid";
          }
        else{
          $errPhone = " Invalid phone number";

        }
    }
    else{
        $phone='';
    }

//Credid Card Validation
        $cc = filter_input(INPUT_POST, 'cc');
        $valcc = "";
        if(isset($cc)){
            if (valid_cc($cc)){
                $valcc = " Credit card number is valid";
            }
            else{
              $errCC= " Invalid credit card number";

            }
        }
        else{
            $cc='';
        }
        //Zip Code Validation
                $zip = filter_input(INPUT_POST, 'zip');
                $valzip = "";
                if(isset($zip)){
                    if (valid_zip($zip)){
                        $valzip = " Zip code is valid";
                    }
                    else{
                      $errZip = " Invalid zip code";
                    }
                }
                else{
                    $zip='';
                }
                //E-mail Validation
                        $email = filter_input(INPUT_POST, 'email');
                        $valemail = "";
                        if(isset($email)){
                            if (valid_email($email)){
                                $valemail = " E-mail is valid";
                            }
                            else{
                              $errEmail = " Invalid e-mail";
                            }
                        }
                        else{
                            $email='';
                        }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Validate Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <main>
        <h1>Validation <span>Tester</span></h1>
        <form name = "myform" action="." method="post">
            <input type="hidden" name="action" value="validate">
            <div id="data">

                <label><i class="fa fa-phone" aria-hidden="true"></i>    Phone Number:</label>
                <input  type="text" name="phone"  value="<?php echo htmlspecialchars($phone); ?>"required>
                <span class="error">* <?php echo $errPhone;?></span>
                  <span class="valid"> <?php echo $valPhone;?></span><br>



                <label><i class="fa fa-credit-card-alt" aria-hidden="true"></i>    Credit Card Number:</label>
                <input type="text" name="cc"value="<?php echo htmlspecialchars($cc); ?>" required>
                <span class="error">* <?php echo $errCC;?></span>
                  <span class="valid"> <?php echo   $valcc;?></span><br>


                <label><i class="fa fa-map-marker" aria-hidden="true"></i>    Zip Code:</label>
                <input  type="text" name="zip" value="<?php echo htmlspecialchars($zip); ?>">
                <span class="error"> <?php echo   $errZip;?></span>
                  <span class="valid"> <?php echo $valzip;?></span><br>


                 <label><i class="fa fa-envelope-o" aria-hidden="true"></i>    E-mail address:</label>
                <input  type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
                <span class="error"> <?php echo   $errEmail;?></span>
                  <span class="valid"> <?php echo $valemail;?></span><br>



            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value=" Validate"> <br><br>

            </div>

        </form>
    </main>

</body>
</html>
