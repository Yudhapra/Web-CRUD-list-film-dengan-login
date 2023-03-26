<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    // Blok Akses dgn session
    public function __construct()  {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('login');
        }
    }

// Blok Akses lewat helper
    // public function __construct()  {
    //     parent::__construct();
    //     is_logged_in();
    // }

	public function index()
	{
        return $this->load->view('admin');
	}
	
	public function Film()
	{
		$this->load->view('film');
	}
	
	#Film
		
	public function Data(){
        //menampung data yang berada di table film,data berupa array
        $data['film'] = $this->db->get('film')->result_array();

        // menuju view film berserta mengirimkan variabel data
        return $this->load->view('data',$data);
    }

    public function tambahFilm(){

        // menampung inputan kedalam sebuah variabel
        $data = array(
            // nama array harus sesuai dengan field di dalam table film
            'nama' => $this->input->post('nama') ,
            'tahun' => $this->input->post('tahun'),
        );

        //syntax menambahkan data kedalam database
        $this->db->insert('film',$data);
        // Syntax flashdata untuk notifikasi
        $this->session->set_flashdata('sukses', "Data Sudah Berhasil Di inputkan!!");

        // kembali ke halamanan tambah data film
        return redirect('/admin/film');
    }
	
	public function edit_dtf($id){

        // mengambil data berdasarkan $id yang dikirim
        $data['film'] =  $this->db->get_where('film',['id'=>$id])->row();

        // menuju view edit_data berserta mengirimkan variabel data
        return $this->load->view('edit_dtf',$data);
    }

    public function action_edit_dtf($id){

        $data = array(
            // nama array harus sesuai dengan field di dalam table film
            'nama' => $this->input->post('nama') ,
            'tahun' => $this->input->post('tahun'),
        );

        //syntax edit data kedalam database
        $this->db->update('film', $data, array('id' => $id));

        // Syntax flashdata untuk notifikasi
        $this->session->set_flashdata('sukses', "Data Sudah Berhasil Di Edit!!");

        return redirect('/admin/data');
    }

    public function hapus_dtf($id){

        // Hapus data
        $this->db->delete('film', array('id' => $id));

        // Syntax flashdata untuk notifikasi
        $this->session->set_flashdata('sukses', "Data Sudah Berhasil Di Hapus!!");

        return redirect('/admin/data');
    }
	
}
