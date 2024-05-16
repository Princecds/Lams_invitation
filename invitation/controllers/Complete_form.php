<?php
defined('BASEPATH') OR exit('No direct script access allowed');

# Rahul Saxena 12122023
class Complete_form extends MY_Controller {
    # File Name : Master_user 
    # Created By : Rahul Saxena on 28-12-2023
    
    public function __construct()
    {
        
            parent::__construct();
            $this->load->model('Complete_form_model');
            $this->load->library('form_validation');
    }
    
    public function list(){ # for listing all the users   Created By : Rahul Saxena on 28-12-2023
       
        $data['title'] = 'Kinda Master : user';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('candidates/complete_form/list',$data);
		$this->load->view('template/footer');
    }
    
    public function create(){
    
        $this->form_validation->set_rules('full_name', 'name', 'trim|required|min_length[2]|max_length[10]');
        // $this->form_validation->set_rules('user_email', 'email', 'trim|required|min_length[4]|max_length[25]');
        // $this->form_validation->set_rules('user_Phone_no', 'phone', 'trim|required|min_length[4]|max_length[10]');
        // $this->form_validation->set_rules('user_education', 'education', 'trim|required|min_length[4]|max_length[25]');
        // $this->form_validation->set_rules('user_address', 'address', 'trim|required|min_length[4]|max_length[25]');
        // $this->form_validation->set_rules('user_company_name', 'address', 'trim|required|min_length[4]|max_length[25]');
        // $this->form_validation->set_rules('user_join_date', 'address', 'trim|required|min_length[4]|max_length[25]');
        // $this->form_validation->set_rules('user_last_date', 'address', 'trim|required|min_length[4]|max_length[25]');
        // $this->form_validation->set_rules('user_key_roll', 'address', 'trim|required|min_length[4]|max_length[25]');
        // $this->form_validation->set_rules('user_last_date', 'address', 'trim|required|min_length[4]|max_length[25]');


        if ($this->form_validation->run() == FALSE)
        {
        $data['title'] = 'Kinda Master : user';

		$this->load->view('candidates/complete_form/form',$data);
		
        }
        else
        {
           $Employment_details = array(
            'FULL_NAME' => $this->input->post('full_name'),
            'FATHER_NAME' => $this->input->post('father_name'),
            'CONTACT_NO' =>$this->input->post('contact_no'),
            'EMAIL_ID' => $this->input->post('email_id'),
            'PERMANENT_ADDRESS' => $this->input->post('permanent_address'),
            'PRESENT_ADDRESS' => $this->input->post('present_address'),
            'DOB' => $this->input->post('dob'),
            'AGE' => $this->input->post('age'),
            'RELIGION' =>$this->input->post('religion'),
            'BIRTH_PLACE' => $this->input->post('birth_place'),
            'MARITAL_STATUS' => $this->input->post('marital_status'),
            'GENDER' => $this->input->post('gender'),
            'CREATED_BY' => 'SU',
            'CREATED_ON' => date('Y-m-d h:i:s a', time())
        );
        
        $skill_1 = $this->input->post('family_details');
        foreach($skill_1 as $k => $v){
          $family_name = $v["family_name"];
          $relationship = $v["relationship"];
          $age = $v["age"];
          $occupation = $v["occupation"];
          $Family_detail = array(
            'FAMILY_NAME' => $family_name,
            'RELATIONSHIP' =>  $relationship,
            'AGE' =>$age,
            'OCCUPATION' => $occupation,
            'CREATED_BY' => 'SU',
            'CREATED_ON' => date('Y-m-d h:i:s a', time())
        );}
        
        $skill_2 = $this->input->post('education_details');
    
          foreach($skill_2 as $k => $v){
          $school_detals = $v["school_detals"];
          $passing_year = $v["passing_year"];
          $from = $v["from"];
          $to = $v["to"];
          $marks = $v["marks"];
          
          $Education_details = array(
            'SCHOOL_DETAILS' => $school_detals,
            'PASSING_YEAR' =>  $passing_year,
            'FROM' =>$from,
            'TO' => $to,
            'MARKS' => $marks,
            'CREATED_BY' => 'SU',
            'CREATED_ON' => date('Y-m-d h:i:s a', time())
        );}
        
        $skill_3 = $this->input->post('Experience_details');
    
          foreach($skill_3 as $k => $v){
            $company_name = $v["company_name"];
            $from = $v["from"];
            $to = $v["to"];
            $at_joining = $v["at_joining"];
            $designation = $v["designation"];
            $at_present = $v["at_present"];
            $reason_for_leaving = $v["reason_for_leaving"];

            $Experience_details = array(
            'COMPANY_NAME' => $company_name,
            'FROM' =>$from,
            'TO' => $to,
            'AT_JOINING' => $at_joining,
            'DESIGNAION' => $designation,
            'REASON_FOR_LEAVING' => $reason_for_leaving,
            'CREATED_BY' => 'SU',
            'CREATED_ON' => date('Y-m-d h:i:s a', time())
        );}
        
        $skill_4 = $this->input->post('referral_details');
        
    
          foreach($skill_4 as $k => $v){
            $referal_name = $v["referal_name"];
            $relationship_ref = $v["relationship_ref"];
            $age_ref = $v["age_ref"];
            $occupation_ref = $v["occupation_ref"];
            
            $Referral_details = array(
            'REFERAL_NAME' => $referal_name,
            'RELATIONSHIP_REF' =>$relationship_ref,
            'AGE_REF' => $age_ref,
            'OCCUPATION_REF' => $occupation_ref,
            // 'DESIGNAION' => $designation,
            // 'REASON_FOR_LEAVING' => $reason_for_leaving,
            'CREATED_BY' => 'SU',
            'CREATED_ON' => date('Y-m-d h:i:s a', time())
        );}
        
        
            $Other_details = array(
            'POSITION_INDICATES' => $this->input->post('position_indicates'),
            'COMPANY_RELATE' => $this->input->post('company_relate'),
            'CURRENT_CTC' =>$this->input->post('Current_ctc'),
            'CRIME_HAPPEND' => $this->input->post('crime_happend'),
            'MENTAL_ILLNESS' => $this->input->post('mental_illness'),
            'CREATED_BY' => 'SU',
            'CREATED_ON' => date('Y-m-d h:i:s a', time())
        );
       
            $Regular_employee = array(
            'DEPARTMENT' => $this->input->post('Department'),
            'JOINING_DATE' => $this->input->post('joining_date'),
            'DESIGNATION' => $this->input->post('Designation_1'),
            'COMPANY' =>$this->input->post('Company_n'),
            'BRANCH_LOCATION' => $this->input->post('branch_location'),
            'REPORTING_TO' => $this->input->post('Reporting_to'),
            'ACCOUNT_NO' => $this->input->post('Account_no'),
            'BLOOD_GRP' => $this->input->post('blood_grp'),
            'CREATED_BY' => 'SU',
            'CREATED_ON' => date('Y-m-d h:i:s a', time())
        );
       
       
            $Prev_employee = array(
            'UNIVACCNO' => $this->input->post('UnivAccNo'),
            'PREVPFACCNO' => $this->input->post('PrevPFAccNo'),
            'EXITDATE' => $this->input->post('ExitDate'),
            'SCHEMECERTNO' =>$this->input->post('SchemeCertNo'),
            'INTLWORKER' => $this->input->post('IntlWorker'),
            'BANKIFSC' => $this->input->post('BankIFSC'),
            'PAN' => $this->input->post('PAN'),
            'CREATED_BY' => 'SU',
            'CREATED_ON' => date('Y-m-d h:i:s a', time())
        );
        
        $this->Complete_form_model->create_form($Family_detail,$Employment_details,$Education_details,$Experience_details,$Referral_details,$Other_details,$Regular_employee,$Prev_employee);
        redirect(base_url().'invitation.php/complete_form/list');
        
        }
    }
    
    public function delete($id =null){ # soft delete user

        if(is_numeric($id)){
            $this->User_form_model->softdel($id);
            redirect(base_url().'backend.php/Master_user');
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
}
?>