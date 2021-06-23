<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {
	public $date;
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->date = date('Y-m-d H:i:s');
	}

	/**
    * Validate the login's data with the database
    * @param string $user_name
    * @param string $password
    * @return void
    */
	function userValidate($userIdemail, $password)
	{
		$this->db->where('user_id', $userIdemail);
		$this->db->or_where('email', $userIdemail);
		$this->db->where('password', $password);
		$this->db->where('user_type', 'user');
		$query = $this->db->get('users');
		$result = $query->row();
		if($query->num_rows()==1){
			return $result;
		} 
		return false;		
	}


	function adminValidate($userIdemail, $password)
	{
		$this->db->or_where('email', $userIdemail);
		$this->db->where('password', $password);
		$this->db->where('user_type', 'admin');
		$query = $this->db->get('users');
		$result = $query->row();
		if($query->num_rows()==1){
			return $result;
		} 
		return false;		
	}


}