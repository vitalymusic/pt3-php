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
        <h1>
            <?= $lang=="lv"?$page_name_lv:$page_name_eng ?>
        </h1>

    <p><?= $contents ?></p>




    </main>
    


    <?php include "./footer.php" ?>