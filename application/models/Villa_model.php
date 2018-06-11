<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Villa_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function laydulieuVilla()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'villa');
		$dl = $this->db->get('data');
		$dl = $dl->result_array(); // tra ve mot mang la gia tri cua một hàng
		foreach ($dl as $value) {
			$tg = $value['giatrithuoctinh']; 
		}
		return $tg;
	}
	public function updateDulieuVilla($dulieu)
	{
		$dulieu = array(
			'tenthuoctinh' => 'villa',
			'giatrithuoctinh' => $dulieu
			);
		$this->db->where('tenthuoctinh', 'villa');
		if($this->db->update('data', $dulieu)){
			$this->load->view('thanhcong');
		}
	}
}

/* End of file Villa_model.php */
/* Location: ./application/models/Villa_model.php */