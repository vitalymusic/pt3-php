<?php 
    session_start();

    $username = "user1@inbox.lv";
    $password= "12345";

    if($_POST["email"]==$username && $_POST["password"]===$password){
         $_SESSION["user_logged_in"] = true;
         $_SESSION["user"] = $_POST["email"];
         if(isset($_COOKIE["error"])) unset($_COOKIE["error"]);
    }else{
            $_SESSION["user_logged_in"] = false;
            $_SESSION["user"] = "";
            $_COOKIE["error"] = "Parole nav pareiza!";
            header("location:login.php");
    }

?>