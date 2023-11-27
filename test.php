<?php
    $name = "eddy";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="POST">
        <input type="hidden" value="roll" name="generateMove">
        <input type="submit" name="fight" value="fight">
    </form>
    <p><?php echo $_POST["generateMove"]; ?></p>
</body>
</html>