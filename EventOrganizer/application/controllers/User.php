<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function index(){
        $this->load->model('user_model','users');
            $data['list_user']=$this->users->getAll();
    
            $this->load->view('layout/header');
            $this->load->view('layout/meta');
            $this->load->view('layout/sidebar');
            $this->load->view('users/index',$data);
            $this->load->view('layout/footer');
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('user_model','users');
        $data['pengguna']=$this->users->findById($_id);
        $data['modeluser']=$this->users;

        $this->load->view('layout/meta');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/view',$data);
        $this->load->view('layout/footer');
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

    public function save(){
        //panggil model, sebagai user
        $this->load->model('user_model','users');
        
        // $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $created_at = $this->input->post('created_at');
        $last_login = $this->input->post('last_login');
        $status = $this->input->post('status');
        $role = $this->input->post('role');
        $idedit = $this->input->post('idedit'); //hidden field, ada kalo update

        //buat array 
        // $data_event[] = $id; // 1
        $data_user[] = $username; // 2
        $data_user[] = $password; // 3
        $data_user[] = $email; // 4
        $data_user[] = $created_at; // 5
        $data_user[] = $last_login; // 6
        $data_user[] = $status; // 7
        $data_user[] = $role; // 8

        //dimasukin ke $data_user dibawah 

        if(isset($idedit)){
            //update data lama
            $data_user[] = $idedit; // 8
            $this->users->update($data_user); //data harus berupa array
            redirect(base_url().'index.php/user/view?id='.$idedit,'refresh');

        }else{
            //save data baru
            // panggil fungsi save yg ada di model
            $this->users->save($data_user); //data harus berupa array
            $data_pengguna = $this->users->getAll();
            foreach($data_pengguna as $user) {
                $_id = $user->id;
            }
            redirect(base_url().'index.php/user/view?id='.$_id,'refresh');
        }

        //redirect itu mengembalikan halaman
        //base url dari config = localhost/eventorganizer/   
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("user_model","users");
        $this->users->delete($_id);
        redirect(base_url().'index.php/user', 'refresh');
    }

}