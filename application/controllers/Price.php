<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Price extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Price_model');
	}

	public function index()
	{
		$text1 = $this->Price_model->laydulieuPrice_text1();
		$text2 = $this->Price_model->laydulieuPrice_text2();
		$text = array(
			'text1' => $text1,
			'text2' => $text2
			);
		$this->load->view('edit_text_price_view', $text);
	}
	public function edit_text()
	{
		$text1 = $this->input->post('text1');
		$text2 = $this->input->post('text2');
		$this->Price_model->updatedulieuPrice_text1($text1);
		$this->Price_model->updatedulieuPrice_text2($text2);
	}
	public function image()
	{
		$dl = $this->Price_model->laydulieuPrice_image();
		$dl = json_decode($dl,true);
		$dl = array('mangdl' => $dl);
		$this->load->view('edit_image_price_view', $dl);
	}
	public function edit_image()
	{
		$image_old = $this->input->post('price_image_old');
		$cacanh = $_FILES['price_image']['name'];
		$filevatly = $_FILES["price_image"]["tmp_name"];
		$image = array();
		for ($i = 0; $i < count($cacanh); $i++) {
			if(empty($cacanh[$i])){
				$image[$i] = $image_old[$i]; // neu khong up moi thi lay cu
			}else {
				$duongdan = 'uploads/price_image/'.$cacanh[$i];
				move_uploaded_file($filevatly[$i], $duongdan); // up file vao duong dan
				$image[$i] = base_url().'uploads/price_image/'.$cacanh[$i];
			}
		}
		$dulieu = array();
		for ($i = 0; $i < count($image) ; $i++) {
			$tem = array();
			$tem['image'] = $image[$i];
			array_push($dulieu, $tem);
		}
		$dulieu = json_encode($dulieu);
		$this->Price_model->updatedulieuPrice_image($dulieu);
	}
}

/* End of file Price.php */
/* Location: ./application/controllers/Price.php */