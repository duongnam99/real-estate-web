<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboutus_img_text_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function laydulieuImg_text()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'aboutus_img_text');
		$dl = $this->db->get('data');
		$dl = $dl->result_array();
		foreach ($dl as $value) {
			$kq = $value['giatrithuoctinh'];
		}
		return $kq;
	}
	public function updatedulieuImg_text($dulieu)
	{
		$dulieu = array(
			'tenthuoctinh' => 'aboutus_img_text',
			'giatrithuoctinh' => $dulieu
			);
		$this->db->where('tenthuoctinh', 'aboutus_img_text');
		if($this->db->update('data', $dulieu)){
			 $this->load->view('thanhcong');
		}
	}

}

/* End of file aboutus_img_text_model.php */
/* Location: ./application/models/aboutus_img_text_model.php */