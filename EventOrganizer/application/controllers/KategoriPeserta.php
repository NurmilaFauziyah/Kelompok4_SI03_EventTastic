<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriPeserta extends CI_Controller {
    public function index(){
        $this->load->model('kategoripeserta_model','kategoripeserta');
            $data['list_participant_categories']=$this->kategoripeserta->getAll();
    
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('layout/meta');
            $this->load->view('kategoripeserta/index',$data);
            $this->load->view('layout/footer');
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('kategoripeserta_model','kategoripeserta');
        $data['participantcategories']=$this->kategoripeserta->findById($_id);
        $data['modelkategoripeserta']=$this->kategoripeserta;

        $this->load->view('layout/meta');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kategoripeserta/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $this->load->view('layout/meta');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kategoripeserta/create');
        $this->load->view('layout/footer');
    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("kategoripeserta_model","kategoripeserta");
        $participant_categories_edit = $this->kategoripeserta->findById($_id);

        $data['participant_categories_edit']=$participant_categories_edit;
        $this->load->view('layout/meta');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kategoripeserta/update',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        //panggil model, sebagai kategoripeserta
        $this->load->model('kategoripeserta_model','kategoripeserta');
        
        $nama = $this->input->post('nama');
        $idedit = $this->input->post('idedit'); //hidden field, ada kalo update

        //buat array 
        $data_participantcategories[] = $nama; // 1


        if(isset($idedit)){
            //update data lama
            $data_participantcategories[] = $idedit; // 2
            $this->kategoripeserta->update($data_participantcategories); //data harus berupa array
            redirect(base_url().'index.php/kategoripeserta/view?id='.$idedit,'refresh');

        }else{
            //save data baru
            // panggil fungsi save yg ada di model
            $this->kategoripeserta->save($data_participantcategories); //data harus berupa array
            $data_kategoripeserta = $this->kategoripeserta->getAll();
            foreach($data_kategoripeserta as $participant_categories) {
                $_id = $participant_categories->id;
            }
            redirect(base_url().'index.php/kategoripeserta/view?id='.$_id,'refresh');
        }

        //redirect itu mengembalikan halaman
        //base url dari config = localhost/eventorganizer/   
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("kategoripeserta_model","kategoripeserta");
        $this->kategoripeserta->delete($_id);
        redirect(base_url().'index.php/kategoripeserta', 'refresh');
    }

}