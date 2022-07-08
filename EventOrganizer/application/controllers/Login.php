<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index(){
        $data = [];
        $this->load->view('login',$data);
    }

    public function otentikasi(){
        //panggil model
        $this->load->model("user_model","users");
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');

        // row adalah var yg didefinisikan sendiri, this->user dari user diatas, fungsi login dengan 2 parameter
        // kedua parameter dimasukkan ke array data dan dieksekusi query
        $row = $this->users->login($_username, $_password); //parameter diambil dari post
        //logic
        if(isset($row)){ //jika user terdapftar di database
            //nambah session
            $this->session->set_userdata('ID', $row->id);
            $this->session->set_userdata('USERNAME', $row->username);
            $this->session->set_userdata('ROLE', $row->role);
            $this->session->set_userdata('USERS', $row);
            if($row->role == "administrator"){
                redirect(base_url().'index.php/dashboard');
            } else{
                redirect(base_url().'index.php/home/');
            }
        }
         else{ //jika user tidak terdaftar atau username/password salah
            redirect(base_url().'index.php/login?status=f');
        }
    }

    // echo $_SESSION('$ID');
    public function logout(){
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('ROLE');
        $this->session->unset_userdata('USER');
        redirect(base_url().'index.php/home');
    }
}
