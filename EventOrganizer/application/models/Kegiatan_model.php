<?php
class Kegiatan_model extends CI_Model {

    private $table = "kegiatan";
    
    public function getAll(){
        //SELECT * FROM kegiatan
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        //SELECT * FROM kegiatan WHERE ID=$id;
        $this->db->where("id", $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data){
        $sql = "INSERT INTO kegiatan (id, judul, jenis_id, kapasitas, harga_tiket, tanggal, tempat, narasumber, pic)
        VALUES (default,?,?,?,?,?,?,?,?)";
        $this->db->query($sql, $data); //data parameter fungsi save yang akan di panggil di controller kegiatan, sql adalah variabel query diatas
    }

    public function update($data){
        //UPDATE
        $sql = "UPDATE kegiatan SET judul=?, jenis_id=?, kapasitas=?, harga_tiket=?, tanggal=?, tempat=?, narasumber=?, pic=? WHERE id=?";
        $this->db->query($sql, $data); 
    }

    public function delete($id){
        //DELETE FROM kegiatan WHERE id=$id;
        $sql = "DELETE FROM kegiatan WHERE id=?";
        $this->db->query($sql, array($id)); 
    }

    public function update_foto($array){
        $sql = "UPDATE kegiatan SET foto_flyer=? WHERE id=?";
        $this->db->query($sql, $array);
    }
}