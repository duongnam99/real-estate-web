<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function checkAdminlogin()
	{
		$this->db->select('*');
		// $this->db->where('id', 1);
		$dl = $this->db->get('admin');
		$dl = $dl->result_array();
		return $dl;

	}
}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */