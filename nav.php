<?php  
    function showNav(){
        $menu = [
            [
                "title"=>"Galvenā lapa",
                "url"=>"./index.php",
            ],
            [
                "title"=>"Par mums",
                "url"=>"./index.php?page=Par mums",
            ],
            [
                "title"=>"Kontakti",
                "url"=>"./index.php?page=Kontakti",
            ],
    
 ];

    foreach($menu as $item){
               echo "<a href=\"{$item["url"]}\">
                        {$item["title"]}
                     </a>"; 
            }


    }

?>