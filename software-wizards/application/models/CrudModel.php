<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudModel extends CI_Model {

	public $date;
	public function __construct() {
	    parent::__construct();  
	    $this->date = date('Y-m-d H:i:s');     
	    $this->load->database();  
	}

    /**
    * Validate the login's data with the database
    * @param string $user_name
    * @param string $password
    * @return void
    */
	function getcmspage($name)
	{
		$this->db->where('name', $name);
		$query = $this->db->get('services');
		$result =$query->row();
		if($query->num_rows()==1){
			return $result;
		} 
		return false;		
	}

	public function getCmsPageBySlug($slugName)
	{
		$this->db->where('slug_name', $slugName);
		$query = $this->db->get('cms_pages');
		$result =$query->row();
		if($query->num_rows()==1){
			return $result;
		} 
		return false;		
	}


	function getData($table, $fields='*', $where=[])
	{
		$this->db->select($fields);
		$this->db->from($table);
		if(count($where)>0){
			$this->db->where($where);
		}
		$query  = $this->db->get();
		return $query->result();
	}

	function getCountData($table, $where=[], $fields='*')
	{
		$this->db->select($fields);
		$this->db->from($table);
		if(count($where)>0){
			$this->db->where($where);
		}
		$query  = $this->db->get();
		return $query->num_rows();
	}

	function getAllJobs($where=[], $count=false) {
	    $this->db->select('jobs.name as job_name,  jobs.*, apjob.*');
	    $this->db->from('applied_jobs as apjob');
	    $this->db->join('jobs', 'jobs.id = apjob.job_id'); 
	    if(count($where)>0){
			$this->db->where($where);
		}
	    $query = $this->db->get();

	    if($count===true){
	    	return $query->num_rows();
	    }
	    return $query->result();
	}


	public function insertData($data=[], $table)
	{
		$this->db->insert($table, $this->removeSubmit($data));
		return $this->db->insert_id();
	}

	public function removeSubmit($data=[])
	{
		if(isset($data['submit'])){
			unset($data['submit']);
		}
		return array_merge(['created_at' => $this->date], $data);
	}


}


?>