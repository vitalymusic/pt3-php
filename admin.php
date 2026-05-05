<?php 
    session_start();
    require "db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
    >
</head>
<?php if(isset($_SESSION["user_logged_in"])):?>
<body>
    <nav>
        <h1>Administrēšanas lapa</h1>
        <h2>Sveicināti, <?=$_SESSION["user"]?></h2>
    </nav>
    <div class="container">
    <h3>Lietotāji</h3>
    <table>
            <tr>
                <td>Epasts</td>
                <td>Vārds</td>
                <td>Uzvārds</td>
                <td>Tālrunis</td>
            </tr>
        <?php foreach(get_users() as $user):?>
            <tr>
                <td><?=$user["email"]?></td>
                <td><?=$user["name"]?></td>
                <td><?=$user["surname"]?></td>
                <td><?=$user["phone"]?></td>
            </tr>
        <?php endforeach; ?>    
    </table>
    
</div>

<dialog open>
    <div class="container ">
        <h3>Lietotāja pievienošana</h3>
    
            <form action="">
                <input type="text" name="name" id="" placeholder="Vārds">
                <input type="text" name="surname" id="" placeholder="Uzvārds">
                <input type="email" name="email" id="" placeholder="Epasts">
                <input type="text" name="phone" id="" placeholder="Tālrunis">
                <input type="submit" value="Pievienot">
            </form>
    </div>
</dialog >   
</body>

<?php else: ?>
<body>
    <div class="container">
        Piekļuve liegta!
    </div>
    <p>Doties uz <a href="login.php">autorizāciju</a> </p>


</body>
<?php endif ?>


</html>