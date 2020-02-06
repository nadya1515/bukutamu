<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//deklarasi bahwa main ini ada 


class Main extends CI_Controller {

	public function index()
	{
		$data['tamu'] = $this->Mbukutamu->tampil_data()->result();
		$this->load->view('index', $data);
	}


	public function tambah_data()
	{
		$this->load->view('tambahdata');
	}


	public function proses_tambahdata()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$instansi = $this->input->post('instansi');
		$aktifitas = $this->input->post('aktifitas');
		$data =  array(
			'nama' => $nama,
			'email' => $email,
			'aktifitas' => $aktifitas,
			'check_in' => date('Y:m:d H:i:s')
			);
			$this -> Mbukutamu -> proses_tambahdata($data, 'tbl_bukutamu');
			redirect('Main');
		
	}

	public function delete($id_bukutamu){
	$where = array('id_bukutamu'=>$id_bukutamu);
	$this->Mbukutamu->delete_data($where, 'tbl_bukutamu');
	redirect('Main');	
	}

	public function edit($id_bukutamu) {
		$where = array('id_bukutamu'=>$id_bukutamu);
		$data['user'] = $this->Mbukutamu->edit_data($where, 'tbl_bukutamu')->result();
		$this->load->view('edit',$data);
	}


	public function proses_editdata(){
		date_default_timezone_set('Asia/Jakarta');
		$id_bukutamu = $this->input->post('id_bukutamu');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$aktifitas = $this->input->post('aktifitas');

		$data = array('id_bukutamu' =>$id_bukutamu,
					   'nama' =>$nama,
					   'email' =>$email,
					   'aktifitas' =>$aktifitas,
					 );

		$where = array(
					'id_bukutamu' => $id_bukutamu
				 );

		$this->Mbukutamu->query_update($where, $data, 'tbl_bukutamu');
		redirect('Main');
	}

	public function checkout($id_bukutamu) {
		$where = array('id_bukutamu'=>$id_bukutamu);
		$data['user'] = $this->Mbukutamu->edit_data($where, 'tbl_bukutamu')->result();
		$this->load->view('checkout',$data);

	}

	public function proses_checkout(){
		date_default_timezone_set('Asia/Jakarta');
		$id_bukutamu = $this->input->post('id_bukutamu');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$aktifitas = $this->input->post('aktifitas');
		$check_in = $this->input->post('check_in');

		$data = array('id_bukutamu' =>$id_bukutamu,
					   'nama' =>$nama,
					   'email' =>$email,
					   'aktifitas' =>$aktifitas,
					   'check_in' =>$check_in,
					   'check_out'=> date('Y:m:d H:i:s')
					 );

		$where = array(
					'id_bukutamu' => $id_bukutamu
				 );

		$this->Mbukutamu->query_update($where, $data, 'tbl_bukutamu');
		redirect('Main');
	}

}
