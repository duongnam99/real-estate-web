<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landscape_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function laydulieuLandscape()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'landscape');
		$dl = $this->db->get('data');
		$dl = $dl->result_array(); // tra ve mot mang la gia tri cua một hàng
		foreach ($dl as $value) {
			$tg = $value['giatrithuoctinh']; 
		}
		return $tg;
	}
	public function updateLandscape($dulieu)
	{
		// dữ liệu truyền vào là mảng dc encode thành chuỗi json (thuộc cột giatrithuoctinh), ta phải tạo hẳn một mảng lớn, bao cả hàng có cột tenthuoctinh là "slides" để UPDATE dc vào database
		$dulieu = array(
			'tenthuoctinh' => 'landscape',
			'giatrithuoctinh' => $dulieu
			);
		$this->db->where('tenthuoctinh', 'landscape');
		if($this->db->update('data', $dulieu)){
			$this->load->view('thanhcong');
		}
	}
	public function laydulieuLandscape_text()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'landscape_text');
		$dl = $this->db->get('data');
		$dl = $dl->result_array(); 
		foreach ($dl as $value) {
			$tg = $value['giatrithuoctinh']; 
		}
		return $tg;
	}
	public function updateLandscape_text($dulieu)
	{
		$dulieu = array(
			'tenthuoctinh' => 'landscape_text',
			'giatrithuoctinh' => $dulieu
			);
		$this->db->where('tenthuoctinh', 'landscape_text');
		if($this->db->update('data', $dulieu)){
			$this->load->view('thanhcong');
		}
	}
	

}

/* End of file Landscape_model.php */
/* Location: ./application/models/Landscape_model.php */