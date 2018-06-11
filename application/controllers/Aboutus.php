<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboutus extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Aboutus_img_text_model');
	}

	public function index()
	{	
		$dl = $this->Aboutus_img_text_model->laydulieuImg_text();
		$dl = json_decode($dl,true);
		$dl = array('mangdl' => $dl);
		$this->load->view('edit_aboutus_img_text_view',$dl);
	}
	public function edit()
	{
		$image_old = $this->input->post('image_old');
		$cacanh = $_FILES['image']['name'];
		$image = array();
		$filevatly = $_FILES["image"]["tmp_name"];
		$text = $this->input->post('text');
		for ($i = 0; $i < count($cacanh); $i++) {
			if(empty($cacanh[$i])){
				$image[$i] = $image_old[$i]; // neu khong up moi thi lay cu
			}else {
				$duongdan = 'uploads/aboutus_image/'.$cacanh[$i];
				move_uploaded_file($filevatly[$i], $duongdan); // up file vao duong dan
				$image[$i] = base_url().'uploads/aboutus_image/'.$cacanh[$i];
			}
		}
		$dulieu = array();
		for ($i = 0; $i < count($image) ; $i++) {
			$tem = array();
			$tem['image'] = $image[$i];
			$tem['text'] = $text[$i];
			array_push($dulieu, $tem);
		}

		$dulieu = json_encode($dulieu);
		$this->Aboutus_img_text_model->updatedulieuImg_text($dulieu);
	}

}

/* End of file Aboutus_img_text.php */
/* Location: ./application/controllers/Aboutus_img_text.php */