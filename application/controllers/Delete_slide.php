<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete_slide extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Add_slide_model');
	}
	public function index()
	{
		$dl = $this->Add_slide_model->laydulieuSlide(); // $dl là chuõi Json
		$dl = json_decode($dl,true);
		$dl = array('mangdl'=>$dl);
		$this->load->view('delete_slide_view', $dl);
	}
	public function delete()
	{
		$dl = $this->Add_slide_model->laydulieuSlide(); // $dl là chuõi Json
		$dl = json_decode($dl,true);
		$number = $this->input->post('number'); 
		unset($dl[$number-1]); // trừ 1 vì mảng bắt đầu từ 0
		$dl = array_values($dl); // QUAN TRỌNG: dùng đẻ chỉnh lại index của mảng sau khi unset, vì unset chỉ làm mất phần tử thôi, không viết lại index
		// encode và gửi lại model:
		$dl = json_encode($dl);
		// gọi hàm update trong model, nếu thành công => trả về 1 => load view 'thanhcong' :
		if($this->Add_slide_model->updateSlide($dl)){
			$this->load->view('thanhcong');
		}
	
	}
	
}

/* End of file Delete_slide.php */
/* Location: ./application/controllers/Delete_slide.php */