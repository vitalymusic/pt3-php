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
    <script src="./admin.js" defer></script>
</head>
<?php if(isset($_SESSION["user_logged_in"])):?>
<body>
    <nav>
        <h1>Administrēšanas lapa</h1>
        <h2>Sveicināti, <?=$_SESSION["user"]?></h2>
    </nav>
    <div class="container">
    <h3>Lietotāji</h3>
    <div class="buttons">
            <button class="openDialog1Btn">+ Pievienot jaunu lietotāju</button>
    </div>
    <table>
            <tr>
                <td>Epasts</td>
                <td>Vārds</td>
                <td>Uzvārds</td>
                <td>Tālrunis</td>
                <td>Darbības</td>
            </tr>
        <?php foreach(get_users() as $user):?>
            <tr>
                <td><?=$user["email"]?></td>
                <td><?=$user["name"]?></td>
                <td><?=$user["surname"]?></td>
                <td><?=$user["phone"]?></td>
                <td><button class="userEditBtn" data-user_id="<?=$user["id"]?>">Rediģēt</button></td>
            </tr>
        <?php endforeach; ?>    
    </table>
    
</div>

<dialog id="dialog1">
    
    <div class="container ">
        <button class="outline dialg1CloseBtn">&#10060;</button>
        <h3>Lietotāja pievienošana</h3>
    
            <form action="admin_core.php?action=addUser" method="POST">
                <input type="text" name="name" id="" placeholder="Vārds">
                <input type="text" name="surname" id="" placeholder="Uzvārds">
                <input type="email" name="email" id="" placeholder="Epasts">
                <input type="text" name="phone" id="" placeholder="Tālrunis">
                <input type="password" name="password" id="" placeholder="Izdomā paroli">
                <input type="submit" value="Pievienot">
            </form>
    </div>
</dialog > 


<dialog id="dialog2">
    <div class="container ">
        <button class="outline dialg2CloseBtn">&#10060;</button>
        <h3>Lietotāja rediģēšana</h3>
    
            <form action="admin_core.php?action=updateUser" method="POST" >
                <input type="text" name="name" id="" placeholder="Vārds">
                <input type="hidden" name="id" id="" value="">
                <input type="text" name="surname" id="" placeholder="Uzvārds">
                <input type="email" name="email" id="" placeholder="Epasts">
                <input type="text" name="phone" id="" placeholder="Tālrunis">
                <input type="submit" value="Saglabāt izmaiņas">
            </form>
                <button class="outline delUserBtn" data-user_id="">Dzēst lietotāju</button>
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