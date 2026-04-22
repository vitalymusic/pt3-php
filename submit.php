<?php 
    // var_dump($_POST);
    if($_POST["vards"]=="" || $_POST["message"]==""){
        // header("location:./index.php?page=contacts",true);
    }
    if($_FILES){
        try{
            // var_dump($_FILES);
            $folder = "upload/";
            move_uploaded_file($_FILES["file"]["tmp_name"],$folder . $_FILES["file"]["name"]);
        }catch(Error){
             echo "Faila ielāde nav izdevusies. Kļūda {$Error}";   
        }finally{
            echo "Fails veiksmīgi ielādēts";
        }
     
    }


?>

<?php
    // var_dump($_POST);
    // if(!isset($_POST["vards"]) || !isset($_POST["message"])){
    //     header("location:./index.php?page=kontakti", true);
    // }
?>