<?php
    if(!function_exists('pr')){
        function pr($data){
            echo "<pre>"; 
            print_r($data);
            echo "</pre>";
            die;
        }
     }
    if(!function_exists('cdt')){
        function cdt(){
            date_default_timezone_set('Asia/Kolkata');
            $date = date('Y-m-d h:i:s', time());
            return $date;
        }
    }
?>