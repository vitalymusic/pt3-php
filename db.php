<?php 
$username = "root";
$password = "root";
$dbname = "PT3_WEB";

$db = new mysqli("localhost",$username,$password,$dbname);

if(!$db){
    die("Datubāze nestrādā");
}


function get_page($page_name){
    global $db; 
    
    $sql = "SELECT `page_name`,`page_content` from pages where page_name=\"{$page_name}\";";

    $result = $db->query($sql);
   
    if($result->num_rows>0){
        $data = $result->fetch_assoc();
         return $data;
    }

}

 get_page("Galvenā");

?>