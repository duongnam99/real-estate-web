<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$this->load->view('admin_login_view');
	}
	public function login()
	{
		$adminname = $this->input->post('adminname');
		$pass = $this->input->post('pass');
		$kq = $this->Admin_model->checkAdminlogin();

		foreach ($kq as $value) {
			$db_adminame = $value['adminname'];
			$db_pass = $value['pass'];
		}
		if( $adminname == $db_adminame && $pass == $db_pass ){
			// tao section
			$info = array(
				'adminname' => $adminname,
				'pass' => $pass
			);		
			$this->session->set_userdata($info);
			//chuyen huong
			redirect(base_url().'add_slide','refresh');
		}else{
			redirect('Admin','refresh');
		}

	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */