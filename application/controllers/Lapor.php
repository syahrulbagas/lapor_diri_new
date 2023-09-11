<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_lapor');
		$this->load->model('m_user');
		$this->load->model('m_jenis_kelamin');
		$this->load->helper(array('url', 'download'));
	}
	

    public function view_super_admin()
	{
	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {

		$data['mahasiswa'] = $this->m_lapor->get_all_lapor()->result_array();
		$this->load->view('super_admin/lapor', $data);

	}else{

		$this->session->set_flashdata('loggin_err','loggin_err');
		redirect('Login/index');

	}
    }
    
	public function view_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

			$data['mahasiswa'] = $this->m_lapor->get_all_lapor()->result_array();
			$this->load->view('admin/lapor', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}

	}
	
	public function view_mahasiswa($id_user)
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$data['lapor'] = $this->m_lapor->get_all_lapor_by_id_user($id_user)->result_array();
		$data['mahasiswa'] = $this->m_user->get_mahasiswa_by_id($this->session->userdata('id_user'))->row_array();
		$data['jenis_kelamin'] = $this->m_jenis_kelamin->get_all_jenis_kelamin()->result_array();
		$data['mahasiswa_data'] = $this->m_user->get_mahasiswa_by_id($this->session->userdata('id_user'))->result_array();
		$this->load->view('mahasiswa/lapor', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}
	
	public function hapus_lapor()
	{

		$id_mahasiswa = $this->input->post("id_mahasiswa");
		$id_user = $this->input->post("id_user");

		$hasil = $this->m_lapor->delete_lapor($id_mahasiswa);
		
		if($hasil==false){
			$this->session->set_flashdata('eror_hapus','eror_hapus');
		}else{
			$this->session->set_flashdata('hapus','hapus');
		}

		redirect('Lapor/view_mahasiswa/'.$id_user);
	}

	public function hapus_lapor_admin()
	{

		$id_mahasiswa = $this->input->post("id_mahasiswa");
		$id_user = $this->input->post("id_user");

		$hasil = $this->m_lapor->delete_lapor($id_mahasiswa);
		
		if($hasil==false){
			$this->session->set_flashdata('eror_hapus','eror_hapus');
		}else{
			$this->session->set_flashdata('hapus','hapus');
		}

		redirect('Lapor/view_admin');
	}

	public function edit_lapor_admin()
	{
		$id_mahasiswa = $this->input->post("id_mahasiswa");
		$nama = $this->input->post("nama");
		$perihal_lapor = $this->input->post("perihal_lapor");
		$tgl_diajukan = $this->input->post("tgl_diajukan");
		$mulai = $this->input->post("mulai");
		$berakhir = $this->input->post("berakhir");


		$hasil = $this->m_lapor->update_lapor($nama, $perihal_cuti, $tgl_diajukan, $mulai, $berakhir, $id_mahasiswa);
		
		if($hasil==false){
			$this->session->set_flashdata('eror_edit','eror_edit');
		}else{
			$this->session->set_flashdata('edit','edit');
		}

		redirect('Lapor/view_admin');
	}

	public function acc_lapor_admin($id_status_mahasiswa)
	{

		$id_mahasiswa = $this->input->post("id_mahasiswa");
		$id_user = $this->input->post("id_user");
		$alasan_verifikasi = $this->input->post("alasan_verifikasi");

		$hasil = $this->m_lapor->confirm_lapor($id_mahasiswa, $id_status_mahasiswa, $alasan_verifikasi);
		
		if($hasil==false){
			$this->session->set_flashdata('eror_input','eror_input');
		}else{
			$this->session->set_flashdata('input','input');
		}

		redirect('Lapor/view_admin/'.$id_user);
	}

	public function acc_lapor_super_admin($id_status_mahasiswa)
	{

		$id_mahasiswa = $this->input->post("id_mahasiswa");
		$id_user = $this->input->post("id_user");
		$alasan_verifikasi = $this->input->post("alasan_verifikasi");

		$hasil = $this->m_lapor->confirm_lapor($id_mahasiswa, $id_status_mahasiswa, $alasan_verifikasi);
		
		if($hasil==false){
			$this->session->set_flashdata('eror_input','eror_input');
		}else{
			$this->session->set_flashdata('input','input');
		}

		redirect('Lapor/view_super_admin/'.$id_user);
	}

	public function detail($id_mahasiswa)
	{
		if ($this->session->userdata('logged_in') == true and $this->session->userdata('id_user_level') == 2) {

        $query = $this->db->get_where('mahasiswa', array('id_mahasiswa' => $id_mahasiswa))->row();
			$data['mahasiswa'] = $this->m_lapor->get_detail($id_mahasiswa)->result_array();
			$this->load->view('admin/detail', $data);
		} else {

			$this->session->set_flashdata('loggin_err', 'loggin_err');
			redirect('Login/index');
		}
	}

	public function detail_superadmin($id_mahasiswa)
	{
		if ($this->session->userdata('logged_in') == true and $this->session->userdata('id_user_level') == 3) {

        $query = $this->db->get_where('mahasiswa', array('id_mahasiswa' => $id_mahasiswa))->row();
			$data['mahasiswa'] = $this->m_lapor->get_detail($id_mahasiswa)->result_array();
			$this->load->view('super_admin/detail', $data);
		} else {

			$this->session->set_flashdata('loggin_err', 'loggin_err');
			redirect('Login/index');
		}
	}

	public function detail_mahasiswa($id_mahasiswa)
	{
		if ($this->session->userdata('logged_in') == true and $this->session->userdata('id_user_level') == 1) {

			$data['update_lapor'] = $this->m_lapor->get_all_lapor_by_id_user($id_mahasiswa)->result_array();
			$data['mahasiswa_lapor'] = $this->m_lapor->get_detail($id_mahasiswa)->result_array();
			$data['mahasiswa'] = $this->m_user->get_mahasiswa_by_id($this->session->userdata('id_user'))->row_array();
			$data['jenis_kelamin'] = $this->m_jenis_kelamin->get_all_jenis_kelamin()->result_array();
			$data['mahasiswa_data'] = $this->m_user->get_mahasiswa_by_id($this->session->userdata('id_user'))->result_array();
			$data['provinsi'] = $this->m_lapor->get_provinsi();
			$this->load->view('mahasiswa/update_pengajuan_lapor', $data);
		} else {

			$this->session->set_flashdata('loggin_err', 'loggin_err');
			redirect('Login/index');
		}
	}


	

	// public function detail($id_mahasiswa){
	// 	$this->load->model('m_cuti');
	// 	$detail = $this->m_cuti->detail_data($id_mahasiswa);
	// 	$data['detail'] =$detail;
	// 	$this->load->view('admin/detail', $data);
	// }

	// public function detail_superadmin()
	// {
	// 	if ($this->session->userdata('logged_in') == true and $this->session->userdata('id_user_level') == 3) {

	// 		$data['mahasiswa'] = $this->m_lapor->get_all_lapor()->result_array();
	// 		$this->load->view('super_admin/detail', $data);
	// 	} else {

	// 		$this->session->set_flashdata('loggin_err', 'loggin_err');
	// 		redirect('Login/index');
	// 	}
	// }

	public function download()
	{
		force_download('assets/dokumen/', NULL);
	}
    
}