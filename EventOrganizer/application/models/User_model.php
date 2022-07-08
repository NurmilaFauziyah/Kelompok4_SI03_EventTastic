<?php 
 class User_model extends CI_Model{
    private $table = "users";
     
    public function getAll(){
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data){
        $sql = "INSERT INTO users (id, username, password, email, created_at, last_login, status, role)
        VALUES (default,?,MD5(?),?,now(),now(),?,?)";
        $this->db->query($sql, $data); //data parameter fungsi save yang akan di panggil di controller kegiatan, sql adalah variabel query diatas
    }

    public function update($data){
        //UPDATE
        $sql = "UPDATE users SET username=?, password=?, email=?, created_at=?, last_login=?, status=?, role=? WHERE id=?";
        $this->db->query($sql, $data); 
    }

    public function delete($id){
        //DELETE FROM users WHERE id=$id;
        $sql = "DELETE FROM users WHERE id=?";
        $this->db->query($sql, array($id)); 
    }

    public function login($uname, $pass){
        $sql = "SELECT * FROM users WHERE username=? and password=MD5(?)";  
        $data = [$uname, $pass];
        $query = $this->db->query($sql, $data);
        return $query->row();
    }

    public function register($data){
        $sql = "INSERT INTO users (id, username, password, email, created_at, last_login, status, role) 
        VALUES (default,?,MD5(?),?,now(),now(),?,?)";
        $this->db->query($sql, $data); 
    }
}