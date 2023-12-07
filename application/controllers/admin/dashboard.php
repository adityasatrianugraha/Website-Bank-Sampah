<?php

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}
	public function index() 
	{
		$pegawai = $this->db->query("SELECT * FROM data_pegawai");
		$admin = $this->db->query("SELECT * FROM data_pegawai WHERE jabatan = 'Admin'");
		
		$data['title'] = "Dashboard";
		$data['pegawai'] = $pegawai->num_rows();
		$data['admin'] = $admin->num_rows();

		$this->load->view('template_admin/header',$data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('template_admin/footer');
	}
}

?>