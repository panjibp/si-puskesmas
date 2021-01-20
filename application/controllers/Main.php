<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Dashboard_model');
		$this->load->model('Pasien_model');
		$this->load->model('Keluhan_model');
	}

	public function home()
	{
		$data = array(
			'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
			'jmlPengguna' => $this->Dashboard_model->jmlpengguna(),
			'jmlDataPasien' => $this->Dashboard_model->jmldatapasien(),
			'jmlDataKeluhan' => $this->Dashboard_model->jmldatakeluhan()
		);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('main/home', $data);
		$this->load->view('templates/footer');
	}

	public function dataPengguna()
	{
		$data = array(
			'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
			'daftaruser' => $this->User_model->daftaruser()
		);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('main/data-pengguna', $data);
		$this->load->view('templates/footer');
	}

	public function dataPenggunaTambah()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
			'is_unique' => "Username telah terdaftar, gunakan yang lain."
		]);

		if ($this->form_validation->run() == true)
		{
			$data = [
				'username' => $this->input->post('username'),
				'fullname' => $this->input->post('fullname'),
				'tipe_user' => $this->input->post('tipe_user'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
			];
			$this->db->insert('user', $data);
			redirect('main/datapengguna');
		} else {
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('main/data-pengguna-tambah', $data);
			$this->load->view('templates/footer');
		}
	}

	public function dataPenggunaEdit()
	{
		$id = $this->input->get('id');
		$data = array(
			'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
			'edituser' => $this->User_model->edituser($id)
		);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('main/data-pengguna-edit', $data);
		$this->load->view('templates/footer');

		$this->session->set_flashdata('id', $id);
	}

	public function dataPenggunaEditProses()
	{
		$id = $this->session->flashdata('id');
		$password = $this->input->post('password');
		$password_hash = password_hash($password, PASSWORD_DEFAULT);

		$data = array(
			'username' => $this->input->post('username'),
			'fullname' => $this->input->post('fullname'),
			'password' => $password_hash,
			'tipe_user' => $this->input->post('tipe_user')
		);

		$this->User_model->prosesedituser($id, $data);
		redirect('main/datapengguna');
	}

	public function dataPenggunaHapus()
	{
		$data = $this->input->get('id');

		$this->User_model->hapususer($data);
		redirect('main/datapengguna');
	}

	public function dataPasien()
	{
		$data = array(
			'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
			'daftarpasien' => $this->Pasien_model->daftarpasien()
		);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('main/data-pasien');
		$this->load->view('templates/footer');
	}

	public function dataPasienTambah()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('main/data-pasien-tambah');
		$this->load->view('templates/footer');
	}

	public function dataPasienTambahProses()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'nomorkartu' => $this->input->post('nomorkartu'),
			'status' => $this->input->post('status'),
			'tgl_lahir' => $this->input->post('t_lahir'),
			'umur' => $this->input->post('umur'),
			'jenis_kelamin' => $this->input->post('jk'),
			'alamat' => $this->input->post('alamat')
		);
		$this->db->insert('pasien', $data);
		redirect('main/datapasien');
	}

	public function dataPasienEdit()
	{
		$id = $this->input->get('id');

		$data = array(
			'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
			'editpasien' => $this->Pasien_model->editpasien($id)
		);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('main/data-pasien-edit');
		$this->load->view('templates/footer');

		$this->session->set_flashdata('id', $id);
	}

	public function dataPasienEditProses()
	{
		$id = $this->session->flashdata('id');

		$data = array(
			'nama' => $this->input->post('nama'),
			'nomorkartu' => $this->input->post('nomorkartu'),
			'status' => $this->input->post('status'),
			'tgl_lahir' => $this->input->post('t_lahir'),
			'umur' => $this->input->post('umur'),
			'jenis_kelamin' => $this->input->post('jk'),
			'alamat' => $this->input->post('alamat')
		);

		$this->Pasien_model->proseseditpasien($id, $data);
		redirect('main/datapasien');
	}

	public function dataPasienHapus()
	{
		$data = $this->input->get('id');

		$this->Pasien_model->hapuspasien($data);
		redirect('main/datapasien');
	}

	public function dataKeluhan()
	{
		$data = array(
			'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
			'daftarkeluhan' => $this->Keluhan_model->daftarkeluhan()
		);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('main/data-keluhan', $data);
		$this->load->view('templates/footer');
	}

	public function dataKeluhanTambah()
	{
		$data = array(
			'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
			'daftarpasien' => $this->Pasien_model->daftarpasien()
		);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('main/data-keluhan-tambah', $data);
		$this->load->view('templates/footer');
	}

	public function dataKeluhanTambahProses()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'tanggal' => $this->input->post('tanggal'),
			'diagnosa' => $this->input->post('diagnosa'),
			'obat' => $this->input->post('obat')
		);

		$this->db->insert('keluhan', $data);
		redirect('main/datakeluhan');
	}

	public function dataKeluhanEdit()
	{
		$id = $this->input->get('id');

		$data = array(
			'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
			'editkeluhan' => $this->Keluhan_model->editkeluhan($id)
		);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('main/data-keluhan-edit', $data);
		$this->load->view('templates/footer');

		$this->session->set_flashdata('id', $id);
	}

	public function dataKeluhanEditProses()
	{
		$id = $this->session->flashdata('id');

		$data = array(
			'nama' => $this->input->post('nama'),
			'tanggal' => $this->input->post('tanggal'),
			'diagnosa' => $this->input->post('diagnosa'),
			'obat' => $this->input->post('obat')
		);

		$this->Keluhan_model->proseseditkeluhan($id, $data);
		redirect('main/datakeluhan');
	}

	public function dataKeluhanHapus()
	{
		$data = $this->input->get('id');

		$this->Keluhan_model->hapuskeluhan($data);
		redirect('main/datakeluhan');
	}

	public function laporan()
	{
		$data = array(
			'keluhan' => $this->Keluhan_model->daftarkeluhan()
		);

		$this->load->view('main/laporan-keluhan', $data);
	}

}