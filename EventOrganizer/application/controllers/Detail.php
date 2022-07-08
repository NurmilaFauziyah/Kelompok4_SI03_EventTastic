<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

    public function index(){
        $_id = $this->input->get('id');
        $this->load->model('kegiatan_model','kegiatan');
        $data['event']=$this->kegiatan->findById($_id);
        $data['modelkegiatan']=$this->kegiatan;

        $this->load->view('detail/index', $data);
    }

    public function create(){
        $this->load->view('detail/index');
    }

    public function save(){
        //panggil model, sebagai pendaftaran
        $this->load->model('daftar_model','pendaftaran');
        
        // $id = $this->input->post('id');
   
        $users_id = $this->session->userdata('ID');
        $kegiatan_peserta_id = $this->input->post('kategori_peserta_id');
        $kegiatan_id = $this->input->post('idkegiatan');
        $alasan = $this->input->post('alasan');
        $nosertifikat = "";
        $idedit = $this->input->post('idedit'); //hidden field, ada kalo update
        

        //buat array 
        // $data_regist[] = $id; // 1

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
            redirect(base_url().'index.php/pendaftaran/view?id='.$_id);
        }

        //redirect itu mengembalikan halaman
        //base url dari config = localhost/eventorganizer/   
    }

}