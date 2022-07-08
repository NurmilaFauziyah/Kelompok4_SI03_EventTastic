<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {
    public function index(){
        $this->load->model('kegiatan_model','kegiatan');
            $data['list_event']=$this->kegiatan->getAll();
    
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('kegiatan/index',$data);
            $this->load->view('layout/footer');
            $this->load->view('layout/meta');

    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('kegiatan_model','kegiatan');
        $data['event']=$this->kegiatan->findById($_id);
        $data['modelkegiatan']=$this->kegiatan;

        $this->load->view('layout/meta');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kegiatan/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $this->load->view('layout/meta');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kegiatan/create');
        $this->load->view('layout/footer');
    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("kegiatan_model","kegiatan");
        $eventedit = $this->kegiatan->findById($_id);

        $data['eventedit']=$eventedit;
        $this->load->view('layout/meta');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kegiatan/update',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        //panggil model, sebagai kegiatan
        $this->load->model('kegiatan_model','kegiatan');
        
        // $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $jenis_id = $this->input->post('jenis_id');
        $kapasitas = $this->input->post('kapasitas');
        $harga_tiket = $this->input->post('harga_tiket');
        $tanggal = $this->input->post('tanggal');
        $tempat = $this->input->post('tempat');
        $narasumber = $this->input->post('narasumber');
        $pic = $this->input->post('pic');
        $idedit = $this->input->post('idedit'); //hidden field, ada kalo update

        //buat array 
        // $data_event[] = $id; // 1
        $data_event[] = $judul; // 2
        $data_event[] = $jenis_id; // 3
        $data_event[] = $kapasitas; // 4
        $data_event[] = $harga_tiket; // 5
        $data_event[] = $tanggal; // 6
        $data_event[] = $tempat; // 7
        $data_event[] = $narasumber; // 8
        $data_event[] = $pic; // 9

        //dimasukin ke $data_event dibawah 

        if(isset($idedit)){
            //update data lama
            $data_event[] = $idedit; // 8
            $this->kegiatan->update($data_event); //data harus berupa array
            redirect(base_url().'index.php/kegiatan/view?id='.$idedit,'refresh');

        }else{
            //save data baru
            // panggil fungsi save yg ada di model
            $this->kegiatan->save($data_event); //data harus berupa array
            $data_kegiatan = $this->kegiatan->getAll();
            foreach($data_kegiatan as $event) {
                $_id = $event->id;
            }
            redirect(base_url().'index.php/kegiatan/view?id='.$_id,'refresh');
        }

        //redirect itu mengembalikan halaman
        //base url dari config = localhost/eventorganizer/   
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("kegiatan_model","kegiatan");
        $this->kegiatan->delete($_id);
        redirect(base_url().'index.php/kegiatan', 'refresh');
    }

    public function upload(){
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 3000;
        $config['max_width']            = 1414;
        $config['max_height']           = 2000;

        $_id = $this->input->post('id');

        $array = explode('.', $_FILES['fotoevent']['name']);
        $extension = end($array);

        //die(print_r($_FILES));
        $new_name = $_id.'.'.$extension;
        //die($new_name);
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('fotoevent'))
        {
            $error = array('error' => $this->upload->display_errors());
            die(print_r($error));
            $this->load->view('upload_form', $error);
            }
        else
        {
            //panggil model
            $this->load->model("kegiatan_model","kegiatan");
            $array_data[]= $new_name; //? ke 1
            $array_data[]= $_id; //? ke 2
            //update foto ditabel kegiatan
            $this->kegiatan->update_foto($array_data);

            $data = array('upload_data' => $this->upload->data());
            //$this->load->view('upload_success', $data);
        }
        redirect(base_url().'index.php/kegiatan/view?id='.$_id);
    }
}