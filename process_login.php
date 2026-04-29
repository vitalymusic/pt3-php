<?php 

    
    session_start();

    $username = "user1@inbox.lv";
    $password= "12345";

    if($_POST["email"]==$username && $_POST["password"]===$password){
         $_SESSION["user_logged_in"] = true;
         $_SESSION["user"] = $_POST["email"];
         if(isset($_COOKIE["error"]))  setcookie("error","",time()-1);
         header("location:admin.php");
    }else{
            $_SESSION["user_logged_in"] = false;
            $_SESSION["user"] = "";
            setcookie("error","Parole nav pareiza!");
            header("location:login.php");
    }

?>