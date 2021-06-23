<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmsPages extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(['url','form', 'security']);
		$this->load->library(['form_validation','session', 'upload']);
		$this->load->model(['crudModel']);
	}
	public function index()
	{
		$this->load->view('template/layout/head');
		$this->load->view('template/layout/header');
		$this->load->view('template/cms_pages/index');
		$this->load->view('template/layout/footer');
	}
    public function about_us()
	{
		$this->load->view('template/layout/head');
		$this->load->view('template/layout/header');
		$this->load->view('template/cms_pages/about-us');
		$this->load->view('template/layout/footer');
	}
	
	 public function our_portfolio()
	{
		$this->load->view('template/layout/head');
		$this->load->view('template/layout/header');
		$this->load->view('template/cms_pages/portfolio');
		$this->load->view('template/layout/footer');
	}
	public function job_listing()
	{
		$data['jobs'] = $this->crudModel->getData('jobs'); 
		$this->load->view('template/layout/head');
		$this->load->view('template/layout/header');
		$this->load->view('template/cms_pages/career/job-listing', $data);
		$this->load->view('template/layout/footer');
	}


	public function internship()
	{

		if($this->input->post('submit')){
			$this->form_validation->set_rules('name','Name','trim|required|max_length[200]|xss_clean');
			$this->form_validation->set_rules('email','Email','trim|required|xss_clean');
			$this->form_validation->set_rules('contact_no','Contact Number','trim|required|max_length[10]|xss_clean');
			$this->form_validation->set_rules('college_name','College Name','trim|required|max_length[200]|xss_clean');
			$this->form_validation->set_rules('stream','Stream/Branch','trim|required|xss_clean');

			$this->form_validation->set_rules('semester','Semester','trim|required|xss_clean');
			$this->form_validation->set_rules('interest_area','Area of Interest','trim|required|xss_clean');
			$this->form_validation->set_rules('cgpa_10','10 cgpa score','trim|required|xss_clean');
			$this->form_validation->set_rules('cgpa_10','12 cgpa score','trim|required|xss_clean');
			$this->form_validation->set_rules('sem_cgpa','Sem cgpa','trim|required|xss_clean');
			$this->form_validation->set_rules('internship_duration','Minimum Duration of Internship','trim|required|xss_clean');
			$this->form_validation->set_rules('looking_for','Are you looking for GRE/GMAT/IELETS /TOEFL Class during Internship','trim|required|xss_clean');
			$this->form_validation->set_rules('upload_resume','Upload Resume','trim|callback_upload_resume|xss_clean');
			if($this->form_validation->run()!==false){
				$upload_path = 'assets/upload'; 
				if($this->crudModel->insertData(array_merge($this->input->post(), ['upload_resume' => $upload_path.'/'.$this->upload->data('file_name')]), 'internship')>0){
					$this->session->set_flashdata('success', 'Your record has been submitted successfully. Our representative will call you back within 24 hrs');
					redirect("/internship");
				} 
				$this->session->set_flashdata('error', 'Something went wrong. Please try again!!!');
				redirect("/contact");		
			} 
		}

		$this->load->view('template/layout/head');
		$this->load->view('template/layout/header');
		$this->load->view('template/cms_pages/career/internship');
		$this->load->view('template/layout/footer');
	}

	function upload_resume(){
	    $upload_path = 'assets/upload/'; 
	    if(!file_exists($upload_path)){
	       mkdir($upload_path);
	    }
	    $config['upload_path']   = $upload_path; 
	 	$config['allowed_types'] = 'pdf|doc|docx'; 
	 	$config['max_size']      = 1024;  
	 	$config['encrypt_name']  = TRUE;
	 	$this->upload->initialize($config);
	 	if (!$this->upload->do_upload('upload_resume')) { 
	        $this->form_validation->set_message('upload_resume', 'The filetype you are attempting to upload is only allowed(".pdf/.doc")');
	        return false;
		}
	}


	public function job_apply($action, $id)
	{
		

		if($this->input->post('submit')){
			$this->form_validation->set_rules('job_id','Name','trim|required|xss_clean');
			$this->form_validation->set_rules('name','Name','trim|required|max_length[200]|xss_clean');
			$this->form_validation->set_rules('email','Email','trim|required|xss_clean');
			$this->form_validation->set_rules('contact_no','Contact Number','trim|required|max_length[10]|xss_clean');
			$this->form_validation->set_rules('highest_qualification','Highest Qualification','trim|required|max_length[200]|xss_clean');
			$this->form_validation->set_rules('resident_location','Resident Location','trim|required|max_length[200]|xss_clean');
			$this->form_validation->set_rules('current_location','Current Location','trim|required|max_length[200]|xss_clean');
			$this->form_validation->set_rules('current_companyname','Current Company','trim|required|max_length[200]|xss_clean');
			$this->form_validation->set_rules('experience','Total Experience','trim|required|max_length[200]|xss_clean');
			$this->form_validation->set_rules('upload_resume','Upload Resume','trim|callback_upload_resume|xss_clean');
			if($this->form_validation->run()!==false){
				$upload_path = 'assets/upload'; 
				if($this->crudModel->insertData(array_merge($this->input->post(), ['upload_resume' => $upload_path.'/'.$this->upload->data('file_name')]), 'applied_jobs')>0){
					$this->session->set_flashdata('success', 'Your record has been submitted successfully. Our representative will call you back within 24 hrs');
					redirect("/job-apply/".$this->input->post('job_id'));
				} 
				$this->session->set_flashdata('error', 'Something went wrong. Please try again!!!');
				redirect("/contact");		
			} 
		}

		$data['jobs'] = $this->crudModel->getData('jobs', '*', ['id' => $id]); 
		$this->load->view('template/layout/head');
		$this->load->view('template/layout/header');
		$this->load->view('template/cms_pages/career/job-apply', $data);
		$this->load->view('template/layout/footer');
	}

	/*function job_upload_resume(){
	    $upload_path = 'assets/upload/jobs/'; 
	    if(!file_exists($upload_path)){
	       mkdir($upload_path);
	    }
	    $config['upload_path']   = $upload_path; 
	 	$config['allowed_types'] = 'pdf|doc|docx'; 
	 	$config['max_size']      = 1024;  
	 	$config['encrypt_name']  = TRUE;
	 	$this->upload->initialize($config);
	 	if (!$this->upload->do_upload('upload_resume')) {
	        $this->form_validation->set_message('upload_resume', 'Invalid file');
	        return false;
		}
	}*/


	public function services()
	{
		$this->load->view('template/layout/head');
		$this->load->view('template/layout/header');
		$this->load->view('template/cms_pages/services');
		$this->load->view('template/layout/footer');
	}
	
	public function mobile_apps_development()
	{
		$this->load->view('template/layout/head');
		$this->load->view('template/layout/header');
		$this->load->view('template/cms_pages/services/mobile-apps-development');
		$this->load->view('template/layout/footer');
	}
	

	public function validateUrl()
	{
		$data    = $this->crudModel->getCmsPageBySlug($this->uri->segment('2'));
		// $recents = $this->cmsModel->getrecent($this->uri->segment('2'));
		if($data===false){
			show_404();
		}
		//return ['results' => $data, 'recents'=>$recents, 'title'=>$data->name];
		return ['results' => $data, 'title'=>$data->name];
	}


	public function cmsPage()
	{
		$data = $this->validateUrl();
		$this->load->view('template/layout/head');
		$this->load->view('template/layout/header');
		$this->load->view('template/cms_pages/services/mobile-apps-development', $data);
		$this->load->view('template/layout/footer');

	}


	

	public function contact_us()
	{
		if($this->input->post('submit')){
			$this->form_validation->set_rules('name','Name','trim|required|max_length[200]|xss_clean');
			$this->form_validation->set_rules('email','Email','trim|required|xss_clean');
			$this->form_validation->set_rules('subject','Subject','trim|required|max_length[200]|xss_clean');
			$this->form_validation->set_rules('subject','Subject','trim|required|max_length[10]|min_length[10]|xss_clean');
			$this->form_validation->set_rules('message','Message','trim|required|max_length[200]xss_clean');
			if($this->form_validation->run()!==false){
				if($this->crudModel->insertData($this->input->post(), 'contact_us')>0){
					$this->session->set_flashdata('success', 'Thank you for contact with us. We will contact you shortly');
					redirect("/contact");
				} 
				$this->session->set_flashdata('error', 'Something went wrong. Please try again!!!');
				redirect("/contact");
			} 
		}
		$this->load->view('template/layout/head');
		$this->load->view('template/layout/header');
		$this->load->view('template/cms_pages/contact');
		$this->load->view('template/layout/footer');


		
	}

	
}
