<?php
// Look for q in the Request global variable
    $q = $_REQUEST['q']; 
    // var_dump($_REQUEST);
    // echo $q;
    if($q){
         // If there is something in the variable $q
        //  echo the reversed string
        echo strrev($q); 
    }
    
?>