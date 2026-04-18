<?php  
    function showNav(){
        $menu = [
            [
                "title"=>"Galvenā lapa",
                "url"=>"./index.php",
            ],
            [
                "title"=>"Par mums",
                "url"=>"./index.php?page=about_us",
            ],
            [
                "title"=>"Kontakti",
                "url"=>"./index.php?page=contacts",
            ],
    
 ];

    foreach($menu as $item){
               echo "<a href=\"{$item["url"]}\">
                        {$item["title"]}
                     </a>"; 
            }


    }

?>