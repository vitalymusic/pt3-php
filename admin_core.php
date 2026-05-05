<?php
    require "db.php";

       if($_GET["action"]=="addUser"){
           
            if(addUser($_POST)){
                header("Location:admin.php");
            }


       } 

       if($_GET["action"]=="loadUser"){
            // var_dump($_GET);

            $data = loaduserById($_GET);
            if($data){
                header('Content-Type: application/json');
                echo json_encode($data,JSON_UNESCAPED_UNICODE);
            }


       } 

         if($_GET["action"]=="updateUser"){
            // var_dump($_POST);
            if(updateUser($_POST)){
                 header("Location:admin.php");
            };


       } 

         if($_GET["action"]=="delUser"){
            var_dump($_POST);

       } 









?>