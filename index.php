<?php 

    putenv("ADDRESS=Maskavas iela");

    // print_r($_GET);
    setcookie("lang","lv");
    setcookie("user","Vitaly");


    // var_dump($_COOKIE);

    session_start();

    // var_dump($_SESSION);


   require "./settings.php";
   require "./db.php";
   

   if(isset($_GET["lang"])){
        $lang = $_GET["lang"];
   }else{
         $lang="lv";
   }
   

//    Page_parametru apstrāde

if(isset($_GET["page"])){

   $data = get_page($_GET["page"]);

}else{
       $data = get_page("Galvenā");   
}




//  asociatīvs masīvs
  include("./nav.php"); 
//   require("./nav2.php"); 
?>

    <?php include "./header.php" ?>
   
    <nav>
        <?php 
            showNav();          
        ?>
    </nav>

    <main>
        <section id="content">
            <h1></h1>
            <p></p>  
            
            <?php var_dump($data)?>
        </section>
        
    


        <form action="./submit.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="vards" id="">
                    <textarea name="message" id=""></textarea>
                    <input type="file" name="file[]" id="" accept="image/*" multiple>
                    <button type="submit">Nosūtīt</button>
        </form>
    
    </main>
    


    <?php include "./footer.php" ?>