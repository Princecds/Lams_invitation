<?php 

class New_user_model extends CI_Model {
    
    # File Name : Mater_leave 
    # Created By : Rahul Saxena on 27-12-2023
    
    public function getuser(){
        $this->db->where('DELETE_STATUS', 0);
        $query = $this->db->get('new_user')->result_array();
        return $query;
    }
    
    public function change_status($currentstatus,$attrid){
        
        $dep_id = explode('_',$attrid)[2];
        switch($currentstatus){
            case '1':
                $newStatus = 0;
                break;
            case '0':
                $newStatus = 1;
                break;
        }
        
        $this->db->set('LEAVE_STATUS', $newStatus);
        $this->db->where('ID', $dep_id);
        $this->db->update('new_user');
        return array('depst'=>$newStatus);
        
    }
    public function getDeleteduser(){
        $this->db->where('DELETE_STATUS', 1);
        $query = $this->db->get('new_user')->result_array();
        return $query;
    }
    
    public function create_user($postData){
    date_default_timezone_set("Asia/Calcutta");
        $full_name = $postData['full_name'];
        $email_id = $postData['email_id'];
        $phone_no = $postData['phone_no'];
        // $cc = $postData[''];
        $created_date = date('Y-m-d H:i:s'); 
        $rand = rand(10,1000);
        $url_token = date('YmdHis'); 
        $data = array(
            'token' => $rand,
            'FULL_NAME' => $full_name,
            'EMAIL_ID' => $email_id,
            'PHONE_NO' => $phone_no,
            // 'IS_FRESHER' => $is_fresher,
            'USER_STATUS' => 1,
            'CREATED_BY' => 'SU',
            'CREATED_ON' => $created_date,
        );
        
    //    pr($data);die;
        
    $temp_url['email_templates_url']='https://hrms.kindasolutions.com/invitation.php/new_user/webform/token/'.$rand."/".$url_token;
    // $temp_ur='https://hrms.kindasolutions.com/invitation.php/new_user/webform/token/'.$rand."/".$url_token;
    // $this->db->insert('new_user', $data);
    // pr($temp_ur);die;
    $email_temp = $this->load->view('new_user/email_templates',$temp_url,true);
    //sending mail 
    // $config=array(
    // 'charset'=>'utf-8',
    // 'wordwrap'=>true,
    // 'mailtype'=>'html'
    // );
    // $this->email->initialize($config);
     
    //   $this->email->from('prince.kumar@navoditfinserv.in', 'Navodit Foundation');
    //   $this->email->to($email_id);
    //   $this->email->cc('pandeyvus@gmail.com');
    //   $this->email->bcc('them@their-example.com');
    //   $this->email->subject('subject');
    //   $this->email->message($email_temp);
    //   $send=$this->email->send();
      
    //   if($send){
    //   $this->session->set_flashdata('success', "email send successfully!");
    //    $this->db->insert('new_user', $data);
    //   redirect(base_url('invitation.php/New_user/create'));
    //   echo "succesfully send";

        $this->load->library('email');
        send_emaiil($email_id,'','subject',$email_temp);
        $this->db->insert('new_user', $data);
        return true;
      
    }
    
    
    
    public function softdel($id){
        $this->db->set('DELETE_STATUS', 1);
        // $this->db->set('leave_STATUS', 0);
        $this->db->where('ID', $id);
        $this->db->update('new_user');
        return true;
    }
     public function deletedstatuschange($attrid){
         $dep_id = explode('_',$attrid)[2];
        $cr_status = explode('_',$attrid)[1];
        $new_status = 0;
        switch($cr_status){
            case 0:
                $new_status = 1;        
                break;
            case 1:
                $new_status = 0;
                break;
            default:
                $new_status = $cr_status;
                break;
        }
       // echo $new_status; die;
        $this->db->set('DELETE_STATUS', $new_status);
        $this->db->set('USER_STATUS', 1);
        $this->db->where('ID', $dep_id);
        $this->db->update('new_user');
        // echo $this->db->last_query();
        return $this->db->last_query();
    }
}
?>