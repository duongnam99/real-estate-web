<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apartment_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function laydulieuApartment()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'apartment');
		$dl = $this->db->get('data');
		$dl = $dl->result_array(); // tra ve mot mang la gia tri cua một hàng
		foreach ($dl as $value) {
			$tg = $value['giatrithuoctinh']; 
		}
		return $tg;
	}
	public function updatedulieuApartment($dulieu)
	{
		$dulieu = array(
			'tenthuoctinh' => 'apartment',
			'giatrithuoctinh' => $dulieu
			);
		$this->db->where('tenthuoctinh', 'apartment');
		if($this->db->update('data', $dulieu)){
			$this->load->view('thanhcong');
		}
		
	}

}

/* End of file Apartment_model.php */
/* Location: ./application/models/Apartment_model.php */