<?php
    require "db.php";
    
       if($_GET["action"]=="addUser"){
            var_dump($_POST);
            if(addUser($_POST)){
                header("Location:admin.php");
            }


       } 

       if($_GET["action"]=="loadUser"){
            var_dump($_POST);


       } 

         if($_GET["action"]=="updateUser"){
            var_dump($_POST);


       } 

         if($_GET["action"]=="delUser"){
            var_dump($_POST);

       } 









?>