<!DOCTYPE html>
<html>
<head>
    <title>String Tester</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>String Tester</h1>
        <form action="." method="post">
        <input type="hidden" name="action" value="process_data" autofocus >

        <label>Name:</label>
        <input type="text" name="name" autofocus
               value="<?php echo htmlspecialchars($name); ?>">
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

        <h2>Message:</h2>
        <p><?php echo nl2br(htmlspecialchars($message)); ?></p>

    </main>
</body>
</html>
