<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Price_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function laydulieuPrice_text1()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'price_text1');
		$dl = $this->db->get('data');
		$dl = $dl->result_array();
		foreach ($dl as $value) {
			$tg = $value['giatrithuoctinh']; 
		}
		return $tg;
	
	}
	public function laydulieuPrice_text2()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'price_text2');
		$dl = $this->db->get('data');
		$dl = $dl->result_array();
		foreach ($dl as $value) {
			$tg = $value['giatrithuoctinh']; 
		}
		return $tg;
	}
	public function updatedulieuPrice_text1($text1)
	{
		$dulieu = array(
			'tenthuoctinh' => 'price_text1',
			'giatrithuoctinh' => $text1
			);
		$this->db->where('tenthuoctinh', 'price_text1');
		$this->db->update('data', $dulieu);
			// $this->load->view('thanhcong');
		
	}
	public function updatedulieuPrice_text2($text2)
	{
		$dulieu = array(
			'tenthuoctinh' => 'price_text2',
			'giatrithuoctinh' => $text2
			);
		$this->db->where('tenthuoctinh', 'price_text2');
		if($this->db->update('data', $dulieu)){
			$this->load->view('thanhcong');
		}
		
	}
	public function laydulieuPrice_image()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'price_image');
		$dl = $this->db->get('data');
		$dl = $dl->result_array();
		foreach ($dl as $value) {
			$tg = $value['giatrithuoctinh']; 
		}
		return $tg;
	
	}
	public function updatedulieuPrice_image($dulieu)
	{
		$dulieu = array(
			'tenthuoctinh' => 'price_image',
			'giatrithuoctinh' => $dulieu
			);
		$this->db->where('tenthuoctinh', 'price_image');
		if($this->db->update('data', $dulieu)){
			 $this->load->view('thanhcong');
		}
	}


}

/* End of file Price_model.php */
/* Location: ./application/models/Price_model.php */