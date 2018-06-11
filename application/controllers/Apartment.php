<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apartment extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Apartment_model');
	}

	public function index()
	{
		$dulieu = $this->Apartment_model->laydulieuApartment();
		$dulieu = json_decode($dulieu,true);
		$dulieu = array('mangdl' => $dulieu);
		$this->load->view('edit_apartment_view', $dulieu);
	}
	public function edit()
	{
		$image_old = $this->input->post('apartment_image_old');
		$cacanh = $_FILES['apartment_image']['name'];
		$image = array();
		$filevatly = $_FILES["apartment_image"]["tmp_name"];
		$text1 = $this->input->post('text1');
		$text2 = $this->input->post('text2');
		for ($i = 0; $i < count($cacanh); $i++) {
			if(empty($cacanh[$i])){
				$image[$i] = $image_old[$i]; // neu khong up moi thi lay cu
			}else {
				$duongdan = 'uploads/apartment_image/'.$cacanh[$i];
				move_uploaded_file($filevatly[$i], $duongdan); // up file vao duong dan
				$image[$i] = base_url().'uploads/apartment_image/'.$cacanh[$i];
			}
		}
		$dulieu = array();
		for ($i = 0; $i < count($image) ; $i++) {
			$tam = array();
			$tam['image'] = $image[$i];
			$tam['text1'] = $text1[$i];
			$tam['text2'] = $text2[$i];
			array_push($dulieu, $tam);
		}

		$dulieu = json_encode($dulieu);
		$this->Apartment_model->updatedulieuApartment($dulieu);
	}

}

/* End of file Apartment.php */
/* Location: ./application/controllers/Apartment.php */