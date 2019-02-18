<?php
   // Look for q in the Request global variable
   if(isset($_REQUEST['q'])){

      $q = $_REQUEST['q']; 
      // var_dump($_REQUEST);
      // echo $q;
      if($q){
         // If there is something in the variable $q
         //  echo the reversed string
         echo str_replace(' ','',$q); 
      }
   }
   if(isset($_REQUEST['first']) && isset($_REQUEST['second'])){
      $first = $_REQUEST['first'];
      $second = $_REQUEST['second'];
      // $first = $first ? $first.trim() : $first;
      // $second = $second ? $second.trim() : $second;
      if($first && $second){
         if(strpos($first,$second) ===false){
            echo 'false';
         } 
         else echo 'true';
      }
   }
?>