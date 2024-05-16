<?php
defined('BASEPATH') OR exit('No direct script access allowed');

# Rahul Saxena 12122023
class User_form extends MY_Controller {
    # File Name : Master_user 
    # Created By : Rahul Saxena on 28-12-2023
    
    public function __construct()
    {
        
            parent::__construct();
            $this->load->model('User_form_model');
            $this->load->library('form_validation');
    }
    
    public function list(){ # for listing all the users   Created By : Rahul Saxena on 28-12-2023
        $data['userList'] = $this->User_form_model->getuser();
         $data['softuserList'] = $this->User_form_model->getDeleteduser(); #Created By : Rahul Saxena on 29-12-2023
        // pr($data);
        $data['title'] = 'Kinda Master : userlist';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('candidates/user_form/list',$data);
		$this->load->view('template/footer');
    }
    
    public function create(){
    //   print_r($this->input->post());die();
    
        $this->form_validation->set_rules('full_name', 'name', 'trim|required|min_length[2]|max_length[10]');
        $this->form_validation->set_rules('email_id', 'email', 'trim|required|min_length[4]|max_length[25]');
        $this->form_validation->set_rules('user_Phone_no', 'phone', 'trim|required|min_length[4]|max_length[10]');
        $this->form_validation->set_rules('user_education', 'education', 'trim|required|min_length[4]|max_length[25]');
        $this->form_validation->set_rules('user_address', 'address', 'trim|required|min_length[4]|max_length[25]');
        // $this->form_validation->set_rules('user_company_name', 'address', 'trim|min_length[4]|max_length[25]');
        // $this->form_validation->set_rules('user_join_date', 'address', 'trim|min_length[4]|max_length[25]');
        // $this->form_validation->set_rules('user_last_date', 'address', 'trim|min_length[4]|max_length[25]');
        // $this->form_validation->set_rules('user_key_roll', 'address', 'trim|min_length[4]|max_length[25]');
        // $this->form_validation->set_rules('user_last_date', 'address', 'trim|required|min_length[4]|max_length[25]');


        if ($this->form_validation->run() == FALSE)
        {
            
            $data['title'] = 'Kinda Master : user';
            $this->load->view('template/header',$data);
    		$this->load->view('template/sidebar');
    		$this->load->view('candidates/user_form/create',$data);
    		$this->load->view('template/footer');
        }
        else
        {
            $postData = $this->input->post();
            // pr($postData);die;
            $this->User_form_model->create_form($postData);
            redirect(base_url().'invitation.php/User_form/list');
        }
        
    }
    public function rename(){ # rename user
        
    }
    
    public function delete($id =null){ # soft delete user
    // echo $id; die;
        if(is_numeric($id)){
            $this->User_form_model->softdel($id);
            echo "<div class='alert alert-success' >User has been Deactivated Succesfully</div>";
            // redirect(base_url().'invitation.php/User_form/list');
        }
    }
    
    public function statuschange(){ # status modification of user Created By : Rahul Saxena on 28-12-2023
    $current_status = $this->input->post('ccst');
    $attrid = $this->input->post('attr');
    $status = $this->User_form_model->change_status($current_status,$attrid);
        echo json_encode($status);
    }
    public function deletedstatuschange(){ # status modification of user Created By : Rahul Saxena on 29-12-2023
        $current_status = $this->input->post('ccst');
        $attrid = $this->input->post('attr');
        $status = $this->User_form_model->deletedstatuschange($attrid);
        echo json_encode($status);
    }
    public function emailsend(){
       $email=$this->input->post('email');
      $this->load->library('email');
      $this->email->from('prince.kumar@navoditfinserv.in', 'Navodit Foundation');
      $this->email->to($email);
      $this->email->cc('another@another-example.com');
      $this->email->bcc('them@their-example.com');
      $this->email->subject($this->input->post('subject'));
      $this->email->message($this->input->post('message'));
      $send=$this->email->send();
      $this->session->set_flashdata('Email', "<strong>Success!</strong> Email Send Successfully.");
      redirect(base_url('invitation.php/user_form/list'));
    //   if($send){
    //       echo "succesfully send";
    //   }
    //   else{
    //       echo "not send succesfully";
    //   }
    }
}
?>