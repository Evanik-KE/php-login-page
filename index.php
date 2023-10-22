<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <?php if(isset($_GET["error"])) {?>
        <p id="error"><?php echo $_GET["error"];?></p>
        <?php }?>
        <h2>Login Here</h2>
        <label>Username</label><br>
        <input type="text" name="username" placeholder="Enter name"><br>
        <label>Password</label><br>
        <input type="password" name="password" placeholder="Enter password"><br>
        <input type="submit" value="login" id="login">
    </form>
</body>
</html>