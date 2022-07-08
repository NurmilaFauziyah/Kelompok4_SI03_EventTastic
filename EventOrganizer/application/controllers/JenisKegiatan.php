<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JenisKegiatan extends CI_Controller {
    public function index(){
        $this->load->model('jeniskegiatan_model','jeniskegiatan');
            $data['list_typeevent']=$this->jeniskegiatan->getAll();
    
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('layout/meta');
            $this->load->view('jeniskegiatan/index',$data);
            $this->load->view('layout/footer');
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('jeniskegiatan_model','jeniskegiatan');
        $data['typeevent']=$this->jeniskegiatan->findById($_id);
        $data['modeltipekegiatan']=$this->jeniskegiatan;

        $this->load->view('layout/meta');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jeniskegiatan/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jeniskegiatan/create');
        $this->load->view('layout/footer');
    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("jeniskegiatan_model","jeniskegiatan");
        $typeeventedit = $this->jeniskegiatan->findById($_id);

        $data['typeeventedit']=$typeeventedit;
        $this->load->view('layout/meta');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jeniskegiatan/update',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        //panggil model, sebagai kegiatan
        $this->load->model('jeniskegiatan_model','jeniskegiatan');
        
        $nama = $this->input->post('nama');
        $idedit = $this->input->post('idedit'); //hidden field, ada kalo update

        //buat array 
        $data_typeevent[] = $judul; // 1

        //dimasukin ke $data_typeevent dibawah 

        if(isset($idedit)){
            //update data lama
            $data_typeevent[] = $idedit; // 2
            $this->jeniskegiatan->update($data_typeevent); //data harus berupa array
            redirect(base_url().'index.php/jeniskegiatan/view?id='.$idedit,'refresh');

        }else{
            //save data baru
            // panggil fungsi save yg ada di model
            $this->jeniskegiatan->save($data_typeevent); //data harus berupa array
            $data_tipekegiatan = $this->jeniskegiatan->getAll();
            foreach($data_tipekegiatan as $type_event) {
                $_id = $type_event->id;
            }
            redirect(base_url().'index.php/jeniskegiatan/view?id='.$_id,'refresh');
        }

        //redirect itu mengembalikan halaman
        //base url dari config = localhost/eventorganizer/   
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("jeniskegiatan_model","jeniskegiatan");
        $this->jeniskegiatan->delete($_id);
        redirect(base_url().'index.php/jeniskegiatan', 'refresh');
    }

}