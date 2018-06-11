<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_slide_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	// Đặt tên là Add nhưng còn dùng cho cả sửa xóa. =))
	// model cần hàm lấy và hàm update dữ liệu, hai hàm này sẽ dc dùng lại nhiều lần
	public function laydulieuSlide()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'slides');
		$dl = $this->db->get('data');
		$dl = $dl->result_array(); // tra ve mot mang la gia tri cua một hàng
		foreach ($dl as $value) {
			$tg = $value['giatrithuoctinh']; 
		}
		return $tg;
	}
	public function updateSlide($dulieu)
	{
		// dữ liệu truyền vào là mảng dc encode thành chuỗi json (thuộc cột giatrithuoctinh), ta phải tạo hẳn một mảng lớn, bao cả hàng có cột tenthuoctinh là "slides" để UPDATE dc vào database
		$dulieu = array(
			'tenthuoctinh' => 'slides',
			'giatrithuoctinh' =>$dulieu
			);
		$this->db->where('tenthuoctinh', 'slides');
		if($this->db->update('data', $dulieu)){
			$this->load->view('thanhcong');
		}
	}
	

}

/* End of file Add_slide_model.php */
/* Location: ./application/models/Add_slide_model.php */