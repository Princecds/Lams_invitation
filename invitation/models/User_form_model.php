<?php 

class User_form_model extends CI_Model {
    
    # File Name : Mater_user 
    # Created By : Rahul Saxena on 27-12-2023 
    
    public function getuser(){
        $this->db->where('DELETE_STATUS', 0);
        $user_form = $this->db->get('user_form')->result_array();
        return $user_form;
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
        
        $this->db->set('user_STATUS', $newStatus);
        $this->db->where('ID', $dep_id);
        $this->db->update('user_form');
        return array('depst'=>$newStatus);
        
    }
    public function getDeleteduser(){
        $this->db->where('DELETE_STATUS', 1);
        $master_department = $this->db->get('user_form')->result_array();
        return $master_department;
    }
    
    public function create_form($postData){


           $full_name = $postData['full_name'];
           $email_id = $postData['email_id'];
           $user_Phone_no = $postData['user_Phone_no'];
           $date_of_birth = $postData['date_of_birth'];
           $is_fresher = $postData['radio'];
           $user_education = $postData['user_education'];
           $user_address = $postData['user_address'];
           $user_company_name = $postData['user_company_name']?$postData['user_company_name']:'None';
           $user_join_date = $postData['user_join_date']?$postData['user_join_date']:'None';
           $user_last_date = $postData['user_last_date']?$postData['user_last_date']:'None';
           $user_key_roll = $postData['user_key_roll']?$postData['user_key_roll']:'None';
           
           
                
        $data = array(
            'FULL_NAME' => $full_name,
            'EMAIL_ID' => $email_id,
            'PHONE_NO' => $user_Phone_no,
            'USER_DOB' => $date_of_birth,
            'IS_FRESHER' => $is_fresher,
            'USER_EDUCATION' => $user_education,
            'USER_ADDRESS' => $user_address,
            'COMPANY_NAME' => $user_company_name,
            'JOIN_DATE' => $user_join_date,
            'LAST_DATE' => $user_last_date,
            'KEY_ROLL' => $user_key_roll,
            // 'user_STATUS' => '1',
            'CREATED_BY' => 'SU',
            'CREATED_ON' => date('Y-m-d h:i:s a', time())
        );

        // pr($data);die(); 
        $this->session->set_flashdata('user_form', "Form Added successfully!");
        $this->db->insert('user_form', $data);
        redirect(base_url('invitation.php/user_form/list'));
    }
    
    public function softdel($id){
        $this->db->set('DELETE_STATUS', 1);
        // $this->db->set('user_STATUS', 0);
        $this->db->where('ID', $id);
        $this->db->update('user_form');
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
        // $this->db->set('user_STATUS', 1);
        $this->db->where('ID', $dep_id);
        $this->db->update('user_form');
        // echo $this->db->last_query();
        return $this->db->last_query();
    }
}
?>