<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index(){
            $data = [];
            $this->load->view('register',$data);
    }

    public function save(){
                //panggil model
                $this->load->model("user_model","users");

                $_username = $this->input->post('username');
                $_password = $this->input->post('password');
                $_email = $this->input->post('email');
                $_status = 1;
                $_role = $this->input->post('role');
                $idedit = $this->input->post('idedit'); //hidden field, ada kalo update
        
                //buat array 
                $data_user[] = $_username; // 1
                $data_user[] = $_password; // 2
                $data_user[] = $_email; // 3
                $data_user[] = $_status; // 4
                $data_user[] = $_role; // 5
                //dimasukin ke $data_user dibawah 
        
                if(isset($idedit)){
                    //update data lama
                    $data_user[] = $idedit; // 8
                    $this->users->update($data_user); //data harus berupa array
                    // redirect(base_url().'index.php/user/view?id='.$idedit,'refresh');
                    redirect(base_url().'index.php/login', 'refresh');

                }else{
                    //save data baru
                    // panggil fungsi save yg ada di model
                    $this->users->save($data_user); //data harus berupa array
                    $data_edituser = $this->users->getAll();
                    foreach($data_edituser as $edituser) {
                        $_id = $edituser->id;
                    }
                    // redirect(base_url().'index.php/user/view?id='.$_id,'refresh');
                    redirect(base_url().'index.php/login');

                    }  
    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("user_model","users");
        $useredit = $this->users->findById($_id);

        $data['useredit']=$useredit;
        $this->load->view('layout/meta');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/update',$data);
        $this->load->view('layout/footer');
    }
}