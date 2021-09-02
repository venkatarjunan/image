<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
	parent::__construct();
	//$this->load->database();
	$this->load->helper('url');
	// $this->load->model('Test');
	 $this->load->model('Test');
	 $this->load->library('upload');


	}
	public function index()
	{
		$data['venkat'] = $this->Test->get_details();
		//print_r($data);exit();
		$this->load->view('home',$data);
	}
	public function add()
	{
		if(isset($_POST['submit']))
		{
			if ($_FILES['photo']['name']) {
             if (!is_dir('./uploads/images/')) {
                mkdir('./uploads/images/', 0777, true);
                }
      $upload_path = './uploads/images/';
      $upload_path_table = base_url() . './uploads/images/';
      $banner = $_FILES['photo']['name'];
      $expbanner = explode('.', $banner);
      $bannerexptype = $expbanner[1];
      $date = date('m/d/Yh:i:sa', time());
      $rand = rand(10000, 99999);
      $encname = $date . $rand;
      $bannername = md5($encname) . '.' . $bannerexptype;
      $bannerpath = $upload_path . $bannername;
      move_uploaded_file($_FILES["photo"]["tmp_name"], $bannerpath);
      $product_image = $upload_path_table . $bannername;
    } else {
      //$product_image = $this->input->post('product_image');
    }

			//$q1=implode(',', $_POST['skill']);
			//print_r($q1);exit();
			$insert_array = array(
				 'name' => $this->input->post('name'),
			     'phone' => $this->input->post('phone'),
			     'email_id' => $this->input->post('email_id'),
			     'dob' => $this->input->post('dob'),
			     'genter' => $this->input->post('genter'),
			     'skill' => $this->input->post('skill'),
			     'degree' => $this->input->post('degree'),
			     'profile' => $product_image,
			     'created_date' =>date('d-m-Y'));
			$this->db->insert('reg_tbl',$insert_array);
			redirect('home');
			//print_r($insert_array);exit();
		}
		$this->load->view('add');
	}
}
