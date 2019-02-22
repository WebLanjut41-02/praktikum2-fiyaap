<?php 
 
class Admin extends MY_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$this->load->view('v_admin');
	}

	function cpeng(){
		$this->load->view('v_cpeng');
		$name = $this->input->post('names');
		$units = $this->input->post('units');
		$ktps = $this->input->post('nktp');

		$where = array(
			'nama' => $name,
			'unit' => $units,
			'ktp'  => $ktps
			);
		$data_session = array(
				'nama' => $name,
				'status' => "login"
				);
		$this->session->set_userdata($data_session);
	
	// redirect(base_url("admin/cpengs"));
	}

	function cpengs(){
		$data['penghuni'] = $this->m_data->ambil_data()->result();
		$this->load->view('v_cpengs',$data);

		
	}
}
?>