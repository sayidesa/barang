<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}



	public function index(){
		$data['barang'] = $this->db->get('jenis_barang');
		$this->load->view('crud/index', $data);
	}

	public function tambahbarang(){
		$this->load->view('crud/tambah');
	}

	public function action_tambah(){
		$KodeJenisBarang = $_POST['KodeJenisBarang'];
		$Keterangan = $_POST['Keterangan'];
		$data_insert = array(
			'KodeJenisBarang' => $KodeJenisBarang,
			'Keterangan' => $Keterangan,
		);
		$res = $this->db->insert('jenis_barang',$data_insert);
		if($res>=1){
			redirect('crud','refresh');
		}else{
			echo '<center><strong>Mohon maaf, data yang anda masukkan telah digunakan</strong></center><br>'; 
		}
	}

	public function editbarang($KodeJenisBarang = NULL )
	{
		$this->db->where('KodeJenisBarang', $KodeJenisBarang);
		$data['barang'] = $this->db->get('jenis_barang');
		$this->load->view('crud/edit',$data);
	}

	public function action_edit($KodeJenisBarang =''){
		$data = array(
			'Keterangan' => $this->input->post('Keterangan')
		);

		$this->db->where('KodeJenisBarang', $KodeJenisBarang);
		$this->db->update('jenis_barang', $data);
		redirect('crud');
	}

	public function hapusbarang( $KodeJenisBarang = NULL)
	{
		$this->db->where('KodeJenisBarang', $KodeJenisBarang);
		$this->db->delete('jenis_barang');
		redirect('crud');
	}
}