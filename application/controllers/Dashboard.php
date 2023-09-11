<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_jenis_kelamin');
		$this->load->model('m_lapor');
	}

	public function dashboard_super_admin()
	{
	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {

		$data['lapor'] = $this->m_lapor->count_all_lapor()->row_array();
		$data['lapor_acc'] = $this->m_lapor->count_all_lapor_acc()->row_array();
		$data['lapor_confirm'] = $this->m_lapor->count_all_lapor_confirm()->row_array();
		$data['lapor_reject'] = $this->m_lapor->count_all_lapor_reject()->row_array();
		$data['mahasiswa'] = $this->m_user->count_all_mahasiswa()->row_array();
		$data['admin'] = $this->m_user->count_all_admin()->row_array();
		$this->load->view('super_admin/dashboard', $data);

	}else{

		$this->session->set_flashdata('loggin_err','loggin_err');
		redirect('Login/index');

	}
	}

	public function dashboard_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {
			$data['lapor'] = $this->m_lapor->count_all_lapor()->row_array();
			$data['lapor_acc'] = $this->m_lapor->count_all_lapor_acc()->row_array();
			$data['lapor_confirm'] = $this->m_lapor->count_all_lapor_confirm()->row_array();
			$data['lapor_reject'] = $this->m_lapor->count_all_lapor_reject()->row_array();
			$data['mahasiswa'] = $this->m_user->count_all_mahasiswa()->row_array();
			$this->load->view('admin/dashboard', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
	
		}
	}
	
	public function dashboard_mahasiswa()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

			$data['lapor_mahasiswa'] = $this->m_lapor->get_all_lapor_first_by_id_user($this->session->userdata('id_user'))->result_array();
			$data['lapor'] = $this->m_lapor->count_all_lapor_by_id($this->session->userdata('id_user'))->row_array();
			$data['lapor_acc'] = $this->m_lapor->count_all_lapor_acc_by_id($this->session->userdata('id_user'))->row_array();
			$data['lapor_confirm'] = $this->m_lapor->count_all_lapor_confirm_by_id($this->session->userdata('id_user'))->row_array();
			$data['lapor_reject'] = $this->m_lapor->count_all_lapor_reject_by_id($this->session->userdata('id_user'))->row_array();
			$data['mahasiswa'] = $this->m_user->get_mahasiswa_by_id($this->session->userdata('id_user'))->row_array();
			$data['jenis_kelamin'] = $this->m_jenis_kelamin->get_all_jenis_kelamin()->result_array();
			$data['mahasiswa_data'] = $this->m_user->get_mahasiswa_by_id($this->session->userdata('id_user'))->result_array();
			// echo var_dump($data);
			// die();
			$this->load->view('mahasiswa/dashboard', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
    }
    
}