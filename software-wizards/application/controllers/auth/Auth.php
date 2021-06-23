<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();  
		$this->load->model(['auth/authModel']);
		$this->load->helper(['security', 'url']);
		$this->load->library(['form_validation','user_agent','session','email']);
		if($this->session->userdata('is_logged_in')){
	      	redirect('dashboard');
	    }
	}

	public function adminLoginView()
	{
		

		if($this->input->post('submit')){
			$this->form_validation->set_rules('email','Email','trim|valid_email|required|xss_clean');
	    	$this->form_validation->set_rules('password','Password','trim|required|xss_clean');
		    if($this->form_validation->run() !== false){
		    	$result = $this->authModel->adminValidate($this->input->post('email'), $this->input->post('password'));
		    	if($result!==false){
		    		$data = array(
						'id' => $result->id,
						'user_id' => $result->user_id,
						'email'=> $result->email,
						'is_logged_in' => true,
						'isAdmin' => true,
						'isUser'=> false
					);
					$this->session->set_userdata($data);
					redirect('dashboard');
		    	} else {
		    		$this->session->set_flashdata('error', 'Your Username or Email and Password are Invalid');
					redirect("admin-login");
		    	}
		    }
		} 

	    $data['title'] = 'Admin Login';	
		$this->load->adminView('login', $data, true);
	}

}
?>