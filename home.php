<?php 
session_start();
if(isset($_SESSION["id"]) && isset($_SESSION["name"])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>home</title>
</head>
<body>
    <h1>Hello, <?php echo $_SESSION["name"] ?> Welcome Again</h1>
    <a href="logout.php">logout</a>    
</body>
</html>
<?php 
}else{
    header("Location: index.php");
    exit();
}
?>