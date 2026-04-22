<?php 
    var_dump($_POST);
    if($_POST["vards"]=="" || $_POST["message"]==""){
        header("location:./index.php?page=kontakti",true);
    }
?>

<?php
    // var_dump($_POST);
    // if(!isset($_POST["vards"]) || !isset($_POST["message"])){
    //     header("location:./index.php?page=kontakti", true);
    // }
?>