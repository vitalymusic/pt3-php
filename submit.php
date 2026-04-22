<?php 
    // var_dump($_POST);
    if($_POST["vards"]=="" || $_POST["message"]==""){
        // header("location:./index.php?page=contacts",true);
    }
    if($_FILES){
        // var_dump($_FILES);
        // vairāku failu ielāde ar ciklu 
        $folder = "upload/";
        foreach($_FILES["file"]["tmp_name"] as $key=>$tmp_name){
            try{
                move_uploaded_file($tmp_name,$folder . $_FILES["file"]["name"][$key]);
            }catch(Error){
                echo "Faila ielāde nav izdevusies. Kļūda {$Error}";   
            }finally{
                echo "Fails veiksmīgi ielādēts";
            }

        }
     
    }


?>

<?php
    // var_dump($_POST);
    // if(!isset($_POST["vards"]) || !isset($_POST["message"])){
    //     header("location:./index.php?page=kontakti", true);
    // }
?>