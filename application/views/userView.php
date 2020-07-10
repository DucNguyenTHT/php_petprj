<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php linkCSS("/assets/css/style.css");?>
</head>
<body>
    <form action="<?php echo BASE;?>/userController/signup" method="post">
        <input type="text" name="Fname" placeholder="Fullname"><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="submit" value="Register"><br>
    </form>

</body>
</html>