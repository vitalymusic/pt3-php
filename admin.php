<?php 
    session_start();
    // var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php if($_SESSION["user_logged_in"]):?>
<body>
    <h1>Administrēšanas lapa</h1>
    <h2>Sveicināti, <?=$_SESSION["user"]?></h2>
</body>
<?php else: ?>
    <body>
    <div>
        Piekļuve liegta!
    </div>
    <p>Doties uz <a href="login.php">autorizāciju</a> </p>


</body>
<?php endif ?>
</html>