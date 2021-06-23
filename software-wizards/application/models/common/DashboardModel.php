<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardModel extends CI_Model {
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
	function getCourses($userId, $type='')
	{
		if($type=='admin'){
			$this->db->where('id!=', $userId);
		} else {
			$this->db->where('id', $userId);
		}
		$query = $this->db->get('users');
		$result = $query->result_array();
		if($query->num_rows()>0){
			return $result;
		} 
		return false;		
	}


}