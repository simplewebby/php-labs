
<?php
    require_once('expressions.php');
    $phone = filter_input(INPUT_POST, 'phone');
    $valPhone = "";
    $errPhone= $errCC=$errZip=$errEmail= " ";


                //Username Validation
                        $username = filter_input(INPUT_POST, 'user');
                        $valuser = "";
                        if(isset($username)){

                            $username=$username;
                        }


                        //Password Validation
                                $password = filter_input(INPUT_POST, 'password');
                                $valpass = "";
                                if(isset($password)){
                                    if (valid_pass($password)){
                                        $valpass = " Password is valid";
                                    }
                                    else{
                                      $errpass = " Invalid password. Password must have at least 8 characters, one number, and must contain at least one special character and one capital letter .";
                                    }
                                }
                                else{
                                    $password='';
                                }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <main>
      <div class="one">
        <h1>SIGN  <span>IN</span></h1>
        <form name = "myform" action="." method="post">
            <input type="hidden" name="action" value="validate">
            <div id="data">
                <label><i class="fa fa-user" aria-hidden="true"></i>   Username:</label>
                <input  type="text" name="user"autofocus value="<?php echo htmlspecialchars($username); ?>" required>
                <span class="error"> <?php echo   $errname;?></span>
                  <span class="valid"> <?php echo $valname;?></span><br>

                  <label><i class="fa fa-key" aria-hidden="true"></i>    Password:</label>
                 <input  type="text" name="password" value="<?php echo htmlspecialchars($password); ?>">
                 <span class="error"> <?php echo   $errpass;?></span>
                   <span class="valid"> <?php echo $valpass;?></span><br>
                 </div>
                 <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value=" Sign in"> <br><br>
              </form>
            </div>
        </div>
    </main>

</body>
</html>
