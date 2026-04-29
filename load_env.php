<?php
// Ielādējam .env failu kā masīvu
$config = parse_ini_file('.env');

// Piekļūstam vērtībām
var_dump($config);

?>