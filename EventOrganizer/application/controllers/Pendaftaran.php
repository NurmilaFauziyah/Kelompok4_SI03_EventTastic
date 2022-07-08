<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

    public function index(){
    $this->load->model('pendaftaran_model','pendaftaran');
        $data['list_daftar']=$this->pendaftaran->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('layout/meta');
        $this->load->view('pendaftaran/index',$data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('pendaftaran_model','pendaftaran');
        $data['daftar']=$this->pendaftaran->findById($_id);
        $data['modeldaftar']=$this->pendaftaran;

        $this->load->view('layout/meta');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pendaftaran/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $this->load->view('layout/meta');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pendaftaran/create');
        $this->load->view('layout/footer');
    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("pendaftaran_model","pendaftaran");
        $registedit = $this->pendaftaran->findById($_id);

        $data['registedit']=$registedit;
        $this->load->view('layout/meta');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pendaftaran/update',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        //panggil model, sebagai pendaftaran
        $this->load->model('pendaftaran_model','pendaftaran');
        
        // $id = $this->input->post('id');
        $tanggal_daftar = $this->input->post('tanggal_daftar');
        $users_id = $this->input->post('users_id');
        $kegiatan_peserta_id = $this->input->post('kategori_peserta_id');
        $kegiatan_id = $this->input->post('kegiatan_id');
        $alasan = $this->input->post('alasan');
        $nosertifikat = $this->input->post('nosertifikat');
        $idedit = $this->input->post('idedit'); //hidden field, ada kalo update

        //buat array 
        // $data_regist[] = $id; // 1
        $data_regist[] = $tanggal_daftar; // 2
        $data_regist[] = $users_id; // 3
        $data_regist[] = $kegiatan_peserta_id; // 4
        $data_regist[] = $kegiatan_id; // 5
        $data_regist[] = $alasan; // 6
        $data_regist[] = $nosertifikat; // 6

        //dimasukin ke $data_regist dibawah 

        if(isset($idedit)){
            //update data lama
            $data_regist[] = $idedit; // 8
            $this->pendaftaran->update($data_regist); //data harus berupa array
            redirect(base_url().'index.php/pendaftaran/view?id='.$idedit,'refresh');

        }else{
            //save data baru
            // panggil fungsi save yg ada di model
            $this->pendaftaran->save($data_regist); //data harus berupa array
            $data_pendaftaran = $this->pendaftaran->getAll();
            foreach($data_pendaftaran as $regist) {
                $_id = $regist->id;
            }
            redirect(base_url().'index.php/pendaftaran/view?id='.$_id,'refresh');
        }

        //redirect itu mengembalikan halaman
        //base url dari config = localhost/eventorganizer/   
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("pendaftaran_model","pendaftaran");
        $this->pendaftaran->delete($_id);
        redirect(base_url().'index.php/pendaftaran', 'refresh');
    }

}