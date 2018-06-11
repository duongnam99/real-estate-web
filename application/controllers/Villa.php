<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Villa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Villa_model');
	}

	public function index()
	{
		$dl = $this->Villa_model->laydulieuVilla();
		$dl = json_decode($dl, true);
		$dl = array('mangdl' => $dl);
		$this->load->view('edit_villa_view', $dl, FALSE);
	}
	public function edit_villa()
	{
		$text1 = $this->input->post('text1');
		$text2 = $this->input->post('text2');

		$cacanh = $_FILES['image']['name'];
		$filevatly = $_FILES["image"]["tmp_name"]; // file that
		$image = array();
		$image_old = $this->input->post('image_old');

		for ($i = 0; $i < count($cacanh); $i++) {
			if(empty($cacanh[$i])){
				$image[$i] = $image_old[$i]; // neu khong up moi thi lay cu
			}else {
				$duongdan = 'uploads/villa_image/'.$cacanh[$i];
				move_uploaded_file($filevatly[$i], $duongdan); // up file vao duong dan
				$image[$i] = base_url().'uploads/villa_image/'.$cacanh[$i];
			}
		}
		// bây h ta đưọc một mảng chứa các đường dẫn ảnh. nhưng ta cần mảng lồng mảng, với các bộ key là 'landscape_image', value là đường dẫn ảnh:
		$dulieu = array();
		for ($i = 0; $i < count($image) ; $i++) {
			$tam = array();
			$tam['image'] = $image[$i];
			$tam['text1'] = $text1[$i];
			$tam['text2'] = $text2[$i];
			array_push($dulieu, $tam);
		}
		$dulieu = json_encode($dulieu);
		if($this->Villa_model->updateDulieuVilla($dulieu) ){
			$this->load->view('thanhcong');
		}
	}
}

/* End of file Villa.php */
/* Location: ./application/controllers/Villa.php */