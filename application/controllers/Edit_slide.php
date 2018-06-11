<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit_slide extends CI_Controller {

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
		$this->load->view('Edit_slide_view', $dl);
	}
	public function edit()
	{
		$cacanh = $_FILES['slide_image']['name'];
		$filevatly = $_FILES["slide_image"]["tmp_name"]; // file that
		$slide_image = array();
		$slide_image_old = $this->input->post('slide_image_old');

		for ($i = 0; $i < count($cacanh); $i++) {
			if(empty($cacanh[$i])){
				$slide_image[$i] = $slide_image_old[$i]; // neu khong up moi thi lay cu
			}else {
				$duongdan = 'uploads/'.$cacanh[$i];
				move_uploaded_file($filevatly[$i], $duongdan); // up file vao duong dan
				$slide_image[$i] = base_url().'uploads/'.$cacanh[$i];
			}
		}
		// bây h ta đưọc một mảng chứa các đường dẫn ảnh. nhưng ta cần mảng lồng mảng, với các bộ key là 'slide_image', value là đường dẫn ảnh:
		$tatcaanh = array();
		for ($i = 0; $i < count($slide_image) ; $i++) {
			$tam = array();
			$tam['slide_image'] = $slide_image[$i];
			array_push($tatcaanh, $tam);
		}
		$tatcaanh = json_encode($tatcaanh);
		if($this->Add_slide_model->updateSlide($tatcaanh)){
			$this->load->view('thanhcong');
		}
	}

}

/* End of file Edit_slide.php */
/* Location: ./application/controllers/Edit_slide.php */