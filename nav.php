<?php  
    function showNav(){

    foreach(get_nav() as $item){
               echo "<a href=\"?page={$item["page_name"]}\">
                        {$item["page_name"]}
                     </a>"; 
            }


    }

?>