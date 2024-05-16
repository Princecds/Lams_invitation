<?php
defined('BASEPATH') OR exit('No direct script access allowed');

# Rahul Saxena 12122023
class New_user extends MY_Controller {
    # File Name : Master_user 
    # Created By : Rahul Saxena on 28-12-2023
    
    public function __construct()
    {
        
            parent::__construct();
            $this->load->model('New_user_model');
            $this->load->library('form_validation');
    }
     
    public function list(){ # for listing all the users   Created By : Rahul Saxena on 28-12-2023
        $data['userList'] = $this->New_user_model->getuser();
         $data['softuserList'] = $this->New_user_model->getDeleteduser(); #Created By : Rahul Saxena on 29-12-2023
        // pr($data);
        $data['title'] = 'joining Invitation : user';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('new_user/list',$data);
		$this->load->view('template/footer');
    }
    
    public function create(){ # creation of new user
    
        $this->form_validation->set_rules('full_name', 'Name', 'trim|required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('email_id', 'email', 'trim|required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('phone_no', 'phone', 'trim|required|min_length[4]|max_length[25]');
        


        if ($this->form_validation->run() == FALSE)
        {
        $data['title'] = 'joining Invitation : user';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('new_user/create',$data);
		$this->load->view('template/footer');
        }
        else
        {
            $postData = $this->input->post();
            $this->New_user_model->create_user($postData); 
            $this->session->set_flashdata('success', "email send successfully!");
            redirect(base_url('invitation.php/New_user/create'));
            // redirect(base_url().'invitation.php/New_user/create');
        }
     
    }
    
    // check url session
    public function webform(){
        // send_emaiil('prince.kumar@navoditfinserv.in','','subject','test msg');
        // echo "goof";die;
    date_default_timezone_set("Asia/Calcutta");
    $contr =$this->uri->segment(1);
    $meth = $this->uri->segment(2);
    $seg1 = $this->uri->segment(3);
    $seg2 = $this->uri->segment(4);
    $seg3 = $this->uri->segment(5);
    
    // echo $seg2;die;
    $time = date("Y-m-d H:i:s",strtotime($seg3)); 
    // pr($time);die;
    $data = array(
        'token' => $seg2,
        'CREATED_ON' => $time
        );
    $this->db->select('*');
    $this->db->from('new_user');
    $this->db->where($data);
    $query = $this->db->get()->row_array();
        // echo $query['created_date'] . '<br>';
        // echo date("Y-m-d H:i:s");
        // pr($query);die;
    if (!empty($query)) {
                $createdDate = strtotime($query['CREATED_ON']);
                $currentDate = time();
                // echo $currentDate; die;
                $differenceInDays = floor(($currentDate - $createdDate) / (60 * 60 * 24));
            
                if ($differenceInDays > 7) {
                    echo "Expire link";
                } else {
                   
                $data['title'] = 'Kinda Master : userlist';
        		$this->load->view('template/header',$data);
        		$this->load->view('template/sidebar');
             	$this->load->view('candidates/user_form/create',$data);
        		$this->load->view('template/footer');
                }

              } else {
                echo "No data found.";
                  }
        
            }

    
    
    
    public function view() {
        $expirationDate = $this->input->get('expiration');

        if ($this->isTemporaryURLValid($expirationDate)) {
            // Continue to the view
            $this->load->view('user/view');
        } else {
            // Display link expired message
            echo 'Link has expired.';
        }
    }

    private function isTemporaryURLValid($expirationDate) {
        $currentDate = date('YmdHis');
        return ($currentDate <= $expirationDate);
    }
    
    public function delete($id =null){ # soft delete user
    // echo $id; die;
        if(is_numeric($id)){
            $this->New_user_model->softdel($id);
            echo "<div class='alert alert-success' >User has been Deactivated Succesfully</div>";
            // redirect(base_url().'invitation.php/new_user/list');
        }
    }
    
    public function statuschange(){ # status modification of user Created By : Rahul Saxena on 28-12-2023
    $current_status = $this->input->post('ccst');
    $attrid = $this->input->post('attr');
    
    
        $status = $this->New_user_model->change_status($current_status,$attrid);
        echo json_encode($status);
    }
    public function deletedstatuschange(){ # status modification of user Created By : Rahul Saxena on 29-12-2023
        $current_status = $this->input->post('ccst');
        $attrid = $this->input->post('attr');
        
    
        $status = $this->New_user_model->deletedstatuschange($attrid);
        echo json_encode($status);
    }
}
?>