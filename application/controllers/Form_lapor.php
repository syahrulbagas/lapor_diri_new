<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_Lapor extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_lapor');
		$this->load->model('m_user');
		$this->load->model('m_jenis_kelamin');
	}

	public function view_mahasiswa()
	{
		if ($this->session->userdata('logged_in') == true and $this->session->userdata('id_user_level') == 1) {

			$data['mahasiswa_data'] = $this->m_user->get_mahasiswa_by_id($this->session->userdata('id_user'))->result_array();
			$data['mahasiswa'] = $this->m_user->get_mahasiswa_by_id($this->session->userdata('id_user'))->row_array();
			$data['jenis_kelamin'] = $this->m_jenis_kelamin->get_all_jenis_kelamin()->result_array();

			$data['provinsi'] = $this->m_lapor->get_provinsi();
		
			$this->load->view('mahasiswa/form_pengajuan_lapor', $data);
		} else {

			$this->session->set_flashdata('loggin_err', 'loggin_err');
			redirect('Login/index');
		}
	}

	public function proses_lapor()
	{
		if ($this->session->userdata('logged_in') == true and $this->session->userdata('id_user_level') == 1) {

			$id_user = $this->input->post("id_user");
			$nama = $this->input->post("nama");
			$nik = $this->input->post("nik");
			$tempat_lahir = $this->input->post("tempat_lahir");
			$tgl_lahir = $this->input->post("tgl_lahir");
			$jenis_kelamin = $this->input->post("jenis_kelamin");
			$no_wa = $this->input->post("no_wa");
			$email_simpkb = $this->input->post("email_simpkb");
			$ptk_id = $this->input->post("ptk_id");
			$nama_darurat = $this->input->post("nama_darurat");
			$no_darurat = $this->input->post("no_darurat");
			$no_peserta = $this->input->post("no_peserta");
			$nim = $this->input->post("nim");
			$lptk = $this->input->post("lptk");
			$bidang_studi = $this->input->post("bidang_studi");
			$nama_kelas = $this->input->post("nama_kelas");
			$alamat = $this->input->post("alamat");
			$provinsi = $this->input->post("provinsi");
			$kabupaten = $this->input->post("kabupaten");
			$kode_pos = $this->input->post("kode_pos");
			$nama_rekening = $this->input->post("nama_rekening");
			$npwp = $this->input->post("npwp");
			$nama_bank = $this->input->post("nama_bank");
			$bank_cabang = $this->input->post("bank_cabang");
			$no_rekening = $this->input->post("no_rekening");


			// if ($dokumen=''){}else{


			// 	// $this->load->library('upload', $config);
			// 	// if(!this->upload->do_upload('dokumen')){
			// 	// 	echo "Upload Gagal"; die();
			// 	// }else{
			// 	// 	$dokumen=$this->upload->data('file_name');
			// 	// }



			$alasan_verifikasi = $this->input->post("alasan_verifikasi");

			$dokumen = time() . "-" . $_FILES['dokumen']['name'];
			$config = array(
				'upload_path' => "./assets/dokumen/",
				'allowed_types' => "jpg|pdf",
				'overwrite' => TRUE,
				'max_size' => "2048000",
				'file_name' => $dokumen
			);
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('dokumen');

			$id_mahasiswa = md5($id_user . $nama . $nim);

			$id_status_mahasiswa = 1;

			$hasil = $this->m_lapor->insert_data_lapor('mahasiswa-' . substr($id_mahasiswa, 0, 5), $id_user, $id_status_mahasiswa, $nama, $nik, $tempat_lahir, $tgl_lahir, $jenis_kelamin, $no_wa, $email_simpkb, $ptk_id, $nama_darurat, $no_darurat, $no_peserta, $nim, $lptk, $bidang_studi, $nama_kelas, $alamat, $provinsi, $kabupaten, $kode_pos, $nama_rekening, $npwp, $nama_bank, $bank_cabang, $no_rekening, $alasan_verifikasi, $dokumen);

			if ($hasil == false) {
				$this->session->set_flashdata('eror_input', 'eror_input');
			} else {
				$this->session->set_flashdata('input', 'input');
			}
			redirect('Form_lapor/view_mahasiswa');
		} else {

			$this->session->set_flashdata('loggin_err', 'loggin_err');
			redirect('Login/index');
		}
	}


	public function edit_lapor_mahasiswa()
	{
		$id_mahasiswa = $this->input->post("id_mahasiswa");
		$nama = $this->input->post("nama");
		$nik = $this->input->post("nik");
		$tempat_lahir = $this->input->post("tempat_lahir");
		$tgl_lahir = $this->input->post("tgl_lahir");
		$jenis_kelamin = $this->input->post("jenis_kelamin");
		$no_wa = $this->input->post("no_wa");
		$email_simpkb = $this->input->post("email_simpkb");
		$nama_darurat = $this->input->post("nama_darurat");
		$no_darurat = $this->input->post("no_darurat");
		$nim = $this->input->post("nim");
		$nama_kelas = $this->input->post("nama_kelas");
		$alamat = $this->input->post("alamat");
		$provinsi = $this->input->post("provinsi");
		$kabupaten = $this->input->post("kabupaten");
		$kode_pos = $this->input->post("kode_pos");
		$nama_rekening = $this->input->post("nama_rekening");
		$npwp = $this->input->post("npwp");
		$nama_bank = $this->input->post("nama_bank");
		$bank_cabang = $this->input->post("bank_cabang");
		$no_rekening = $this->input->post("no_rekening");

		$dokumen = time() . "-" . $_FILES['dokumen']['name'];
		$config = array(
			'upload_path' => "./assets/dokumen/",
			'allowed_types' => "jpg|pdf",
			'overwrite' => TRUE,
			'max_size' => "2048000",
			'file_name' => $dokumen
		);
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('dokumen');



		$hasil = $this->m_lapor->update_lapor($nama, $nik, $tempat_lahir, $tgl_lahir, $jenis_kelamin, $no_wa, $email_simpkb, $nama_darurat, $no_darurat, $nim, $nama_kelas, $alamat, $provinsi, $kabupaten, $kode_pos, $nama_rekening, $npwp, $nama_bank, $bank_cabang, $no_rekening, $dokumen, $id_mahasiswa);

		if ($hasil == false) {
			$this->session->set_flashdata('eror_edit', 'eror_edit');
		} else {
			$this->session->set_flashdata('edit', 'edit');
		}

		redirect('Lapor/detail_mahasiswa');
	}

	

	//request data kabupaten berdasarkan id provinsi yang dipilih
	function get_kabupaten()
	{
		if ($this->input->post('provinsi_id')) {
			echo $this->m_lapor->get_kabupaten($this->input->post('provinsi_id'));
		}
	}

	//request data kecamatan berdasarkan id kabupaten yang dipilih
	function get_kecamatan()
	{
		if ($this->input->post('kabupaten_id')) {
			echo $this->m_lapor->get_kecamatan($this->input->post('kabupaten_id'));
		}
	}

	//request data desa berdasarkan id kecamatan yang dipilih
	function get_desa()
	{
		if ($this->input->post('kecamatan_id')) {
			echo $this->m_lapor->get_desa($this->input->post('kecamatan_id'));
		}
	}
}

