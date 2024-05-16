<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function index()
	{
	    $data['title'] = "Kinda Solutions :  HRMS";
	 
		$this->load->view('User/index',$data);
	 
	}
	public function forgetPassword(){
	    $data['title'] = "Kinda Solutions :  HRMS Forget Password";
	    $this->load->view('User/forget_pass',$data);
	}

}
