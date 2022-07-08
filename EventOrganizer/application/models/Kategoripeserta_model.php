<?php
class Kategoripeserta_model extends CI_Model {

    private $table = "kategori_peserta";
    
    public function getAll(){
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        $this->db->where("id", $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data){
        $sql = "INSERT INTO kategori_peserta (id, nama)
        VALUES (default,?)";
        $this->db->query($sql, $data);
    }

    public function update($data){
        //UPDATE
        $sql = "UPDATE kategori_peserta SET nama=? WHERE id=?";
        $this->db->query($sql, $data); 
    }

    public function delete($id){
        $sql = "DELETE FROM kategori_peserta WHERE id=?";
        $this->db->query($sql, array($id)); 
    }

}