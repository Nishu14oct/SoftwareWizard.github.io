<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['auth/authModel']);
		$this->load->model(['common/dashboardModel']);
		$this->load->model(['CrudModel']);
		$this->load->helper(['security', 'url']);
		$this->load->library(['form_validation','user_agent','session','email']);
		if(!$this->session->userdata('is_logged_in')){
	      	redirect('index');
	    }
	}
	public function index()
	 
	{   
	    $data['contacts']    = $this->CrudModel->getCountData('contact_us');
		$data['countinternships'] = $this->CrudModel->getCountData('internship');
		$data['jobs']        = $this->CrudModel->getAllJobs([], true);
		$data['internships'] = $this->CrudModel->getData('internship');
		$data['title']       = 'Home';
		$this->load->adminView('dashboard',$data);
	}
 
	public function jobs()
	{	$data['jobs']  = $this->CrudModel->getAllJobs();
		$data['title'] = 'jobs';	
		$this->load->adminView('job-report', $data);
	}

	public function internships()
	{	$data['internships'] = $this->CrudModel->getData('internship');
		$data['title']      = 'jobs';	
		$this->load->adminView('internship-report', $data);
	}

	public function contactUs()
	{	$data['contact_us'] = $this->CrudModel->getData('contact_us');
		$data['title']      = 'Contact Us';	
		$this->load->adminView('contact-report', $data);
	}
	public function courses()
	{
		$data['title']   = 'Course';
		$data['courses'] = $this->dashboardModel->getCourses($this->getId(), $this->getUserType());
		$this->load->adminView('courses',$data);
	}

	public function exportUsers()
	{
		$filename = 'users-list-'.date('YmdHis').'.csv'; 
	   	header("Content-Description: File Transfer"); 
	   	header("Content-Disposition: attachment; filename=$filename"); 
	   	header("Content-Type: application/csv; ");
	   	$header=[
	   		'Training Program',
	   		'Location',
	   		'Preferred Timing',
	   		'Batch With Location',
	   		'Trainee Name',
	   		'Contact Number',
	   		'Email',
	   		'Username',
	   		'Course',
	   		'Type',
	   		'College/Organization',
	   		'College/Designation',
	   		'Source of Information',
	   		'Comment',
	   		'Mail Sent',
	   		'SMS Sent',
	   		'Created At'
	   	];
	   	$file = fopen('php://output', 'w');
	   	fputcsv($file, $header);
	   	$users = $this->dashboardModel->getCourses($this->getId(), $this->getUserType());
	   	if($users!==false){
	   		foreach ($users as $user) {
	   			$data = [
			   		'Training Program' => $user['training_program'],
			   		'Location' => $user['location'],
			   		'Preferred Timing' => $user['preferred_timing'],
			   		'Batch With Location' => ($user['batch1']) ? ucfirst($user['batch']).'('.$user['batch1'].')' : '',
			   		'Trainee Name' => $user['name_trainee'],
			   		'Contact Number' => $user['contact_number'],
			   		'Email' => $user['email'],
			   		'Username' => $user['user_id'],
			   		'Course' => $user['course'],
			   		'Type' => $user['studentstype'],
			   		'College/Organization' => $user['organization'],
			   		'College/Designation' => $user['designation'],
			   		'Source of Information' => $user['source_info'],
			   		'Comment' => $user['about_your_self'],
			   		'Mail Sent' => ($user['ismail_sent']=='1') ? 'Yes' : 'No',
			   		'SMS Sent' => ($user['issms_sent']=='1') ? 'Yes' : 'No',
			   		'Created At' => $user['created_at']
			   	];
	   			fputcsv($file, $data);
	   		}
	   	}
	   	fclose($file); 
   		exit; 
		
	}

    public function profile()
	{
		$data['title'] = 'Profile';	
		$this->load->adminView('profile',$data);
	}

	public function adminLogout()
	{
		$this->session->sess_destroy();
		redirect('admin-login');
	}

	public function getUserType()
	{
		return ($this->session->userdata('isAdmin')==1) ? 'admin' : 'user';
	}

	public function getId()
	{
		return $this->session->userdata('id');
	}
}
