<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_slide extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Add_slide_model');
	}

	public function index()
	{
		$this->load->view('add_slide_view');
	}
	public function add()
	{
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["slide_image"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["slide_image"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		// if (file_exists($target_file)) {
		//     echo "Sorry, file already exists.";
		//     $uploadOk = 0;
		// }
		// Check file size
		// if ($_FILES["slide_image"]["size"] > 5000000) {
		//     echo "Sorry, your file is too large.";
		//     $uploadOk = 0;
		// }
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["slide_image"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["slide_image"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		$slide_image = base_url().$target_file ;

		
		// Vì chỉ có một biến nên không cần dùng json cũng dc, tuy nhiên cứ dùng =))
		// goi model, lay du lieu 
		$dulieu = $this->Add_slide_model->laydulieuSlide();

		// ban đầu, dữ liệu chưa có gì, ta khởi tạo một  mảng trống và nhét các mảng dữ liệu con vào, encode cho thành json rồi ném vào cột giatrithuoctinh trong bảng dữ liệu slide.
		$dulieu = json_decode($dulieu,true);
		if($dulieu == null){
			$dulieu = array();
		}
		// tạo mảng con
		$motslide = array(
			'slide_image' => $slide_image
		);
		array_push($dulieu, $motslide);
		$dulieu = json_encode($dulieu,true);
		// truyền vào model để model đẩy vào datababase
		$this->Add_slide_model->updateSlide($dulieu);
	}

}

/* End of file Add_slide.php */
/* Location: ./application/controllers/Add_slide.php */