<?php 
    // print_r($_GET);




   require "./settings.php";
   if(isset($_GET["lang"])){
        $lang = $_GET["lang"];
   }else{
         $lang="lv";
   }
   


//  asociatīvs masīvs
  include("./nav.php"); 
//   require("./nav2.php"); 
?>

    <?php include "./header.php" ?>
   <?php 
        if(isset($_GET["view"]) && $_GET["view"]=="admin"):
   ?>
        <div class="administrator">
            <h2>Admin panelis</h2>
        </div>
    <?php else: ?>
        <div class="user">
            <h2>Lietotājs</h2>
        </div> 
    <?php endif; ?>      

    <nav>
        <?php 
            showNav();          
        ?>
    </nav>

    <main>
       <?php if(isset($_GET["page"]) && $_GET["page"]=="about_us"):?>
            <section id="about">
                <h1>Par mums</h1>
                <p>Te būs teksts par mums</p>
            </section>
      <?php elseif(isset($_GET["page"]) && $_GET["page"]=="contacts"): ?>  
            <section id="contacts">
                <h1>Kontakti</h1>
                <p>Te būs teksts Kontakti</p>
            </section>

      <?php else: ?>
            <section id="home">
                <h1>Galvenā lapa</h1>
                <p>Te būs teksts Galvenā lapa</p>
            </section>
        
      <?php endif ?>  
    
    
    
    
    
    </main>
    


    <?php include "./footer.php" ?>