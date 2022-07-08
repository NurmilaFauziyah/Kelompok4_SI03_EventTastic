<?php 
 class Pendaftaran_model extends CI_Model{

    private $table = 'daftar';

    public function getAll(){
        //SELECT * FROM mahasiswa
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        // SELECT * FROM mahasiswa WHERE nim=$id;
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data){
         $sql = "INSERT INTO daftar (id, tanggal_daftar, users_id, kategori_peserta_id, kegiatan_id, alasan, nosertifikat)
               VALUES (default,?,?,?,?,?,?)";
         $this->db->query($sql,$data);
    }

    public function update($data){
       // UPDATE
       $sql = "UPDATE daftar SET tanggal_daftar=?, users_id=?, kategori_peserta_id=?, kegiatan_id=?, alasan=?, nosertifikat=? WHERE id=?";
         $this->db->query($sql,$data);
    }

    public function delete($id){
       $sql = "delete from daftar where id=?";
       $this->db->query($sql,array($id));
    }
 }