<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landscape extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Landscape_model');
	}

	public function index()
	{
		$this->load->view('add_landscape_view');
	}
	public function addLandscape_image()
	{
		$target_dir = "uploads/landscape_image/";
		$target_file = $target_dir . basename($_FILES["landscape_image"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["landscape_image"]["tmp_name"]);
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
		// if ($_FILES["lansdcape_image"]["size"] > 5000000) {
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
		    if (move_uploaded_file($_FILES["landscape_image"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["landscape_image"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		$landscape_image = base_url().$target_file ;
		// $lansdcape_text = $this->input->post('lansdcape_text');
		$dulieu = $this->Landscape_model->laydulieuLandscape();

		// ban đầu, dữ liệu chưa có gì, ta khởi tạo một  mảng trống và nhét các mảng dữ liệu con vào, encode cho thành json rồi ném vào cột giatrithuoctinh trong bảng dữ liệu slide.

		$dulieu = json_decode($dulieu,true);

		if($dulieu == null){
			$dulieu = array();
		}
		// tạo mảng con
		$motLandscape_image = array(
			'landscape_image' => $landscape_image
		);
		array_push($dulieu, $motLandscape_image);
		$dulieu = json_encode($dulieu,true);
		// truyền vào model để model đẩy vào datababase
		$this->Landscape_model->updateLandscape($dulieu);
	}
	public function editLandscape_image()
	{
		$dl = $this->Landscape_model->laydulieuLandscape();
		$dl = json_decode($dl, true);
		$dl = array('mangdl' => $dl);
		$this->load->view('edit_landscape_view', $dl);
	}
	public function edit()
	{
		$cacanh = $_FILES['landscape_image']['name'];
		$filevatly = $_FILES["landscape_image"]["tmp_name"]; // file that
		$landscape_image = array();
		$landscape_image_old = $this->input->post('landscape_image_old');

		for ($i = 0; $i < count($cacanh); $i++) {
			if(empty($cacanh[$i])){
				$landscape_image[$i] = $landscape_image_old[$i]; // neu khong up moi thi lay cu
			}else {
				$duongdan = 'uploads/landscape_image/'.$cacanh[$i];
				move_uploaded_file($filevatly[$i], $duongdan); // up file vao duong dan
				$landscape_image[$i] = base_url().'uploads/landscape_image/'.$cacanh[$i];
			}
		}
		// bây h ta đưọc một mảng chứa các đường dẫn ảnh. nhưng ta cần mảng lồng mảng, với các bộ key là 'landscape_image', value là đường dẫn ảnh:
		$tatcaanh = array();
		for ($i = 0; $i < count($landscape_image) ; $i++) {
			$tam = array();
			$tam['landscape_image'] = $landscape_image[$i];
			array_push($tatcaanh, $tam);
		}
		$tatcaanh = json_encode($tatcaanh);
		if($this->Landscape_model->updateLandscape($tatcaanh)){
			$this->load->view('thanhcong');
		}
	}
	public function deleteLandscape_image()
	{
		$dl = $this->Landscape_model->laydulieuLandscape();
		$dl = json_decode($dl, true);
		$dl = array('mangdl' => $dl);
		$this->load->view('delete_landscape_view', $dl);
	}
	public function delete()
	{
		$dl = $this->Landscape_model->laydulieuLandscape();
		$dl = json_decode($dl, true);
		$number = $this->input->post('number'); 
		unset($dl[$number-1]); // trừ 1 vì mảng bắt đầu từ 0
		$dl = array_values($dl); // QUAN TRỌNG: dùng đẻ chỉnh lại index của mảng sau khi unset, vì unset chỉ làm mất phần tử thôi, không viết lại index
		// encode và gửi lại model:
		$dl = json_encode($dl);
		// gọi hàm update trong model, nếu thành công => trả về 1 => load view 'thanhcong' :
		if($this->Landscape_model->updateLandscape($dl)){
			$this->load->view('thanhcong');
		}	
	}
	public function landscape_text()
	{
		$text = $this->Landscape_model->laydulieuLandscape_text();
		$text = array('text' => $text);
		$this->load->view('edit_landscape_text_view', $text, FALSE);
	}
	public function edit_landscape_text()
	{
		$text = $this->input->post('text');
		if($this->Landscape_model->updateLandscape_text($text)){
			$this->load->view('thanhcong1');
		}
	}
	
}

/* End of file Landscape.php */
/* Location: ./application/controllers/Landscape.php */