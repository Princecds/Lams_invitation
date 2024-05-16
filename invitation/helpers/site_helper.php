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
 

    if (!function_exists('send_emaiil')) {
        function send_emaiil($to, $cc,$subject,$msg)
        {
            $CI =& get_instance();
            $CI->load->library('email'); 
            // $CI->email->set_mailtype('html'); 
            $CI->email->from('tst@marquora.website', 'Utkarsh Fintech');
            $CI->email->to($to);
            $CI->email->cc($cc);
            $CI->email->subject($subject);
            $CI->email->message($msg);
            // Send email and return result
            return $CI->email->send();
        }
    }
    
?>