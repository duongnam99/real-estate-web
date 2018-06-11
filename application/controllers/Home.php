<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Add_slide_model');
		$this->load->model('Landscape_model');
		$this->load->model('Villa_model');
		$this->load->model('Apartment_model');
		$this->load->model('Price_model');
		$this->load->model('Aboutus_img_text_model');

	}

	public function index()
	{
		$dl = $this->Add_slide_model->laydulieuSlide();
		$dl = json_decode($dl,true);

		$dl1 = $this->Landscape_model->laydulieuLandscape();
		$dl1 = json_decode($dl1,true);

		$textLandscape = $this->Landscape_model->laydulieuLandscape_text();
		
		$villa = $this->Villa_model->laydulieuVilla();
		$villa = json_decode($villa,true);

		$apartment = $this->Apartment_model->laydulieuApartment();
		$apartment = json_decode($apartment,true);

		$imagePrice = $this->Price_model->laydulieuPrice_image();
		$imagePrice = json_decode($imagePrice, true);
	
		$price_text1 = $this->Price_model->laydulieuPrice_text1();
		$price_text2 = $this->Price_model->laydulieuPrice_text2();

		$aboutus_img_text = $this->Aboutus_img_text_model->laydulieuImg_text();
		$aboutus_img_text = json_decode($aboutus_img_text,true);
		
		$dulieu = array(
			'mangdl' =>$dl,
			'mangdl1'=>$dl1,
			'textLandscape' => $textLandscape,
			'villa' => $villa,
			'apartment' => $apartment,
			'price_text1' => $price_text1,
			'price_text2' => $price_text2,
			'imagePrice' => $imagePrice,
			'aboutus_img_text' => $aboutus_img_text
			);
		$this->load->view('home', $dulieu);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */