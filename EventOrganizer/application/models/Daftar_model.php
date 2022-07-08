<?php 
class Daftar_model extends CI_Model{

    private $table = 'daftar';

    public function getAll(){
        //SELECT * FROM daftar
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        // SELECT * FROM daftar WHERE id=$id;
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function update($data){
        // UPDATE
        $sql = "UPDATE daftar SET tanggal_daftar=?, users_id=?, kategori_peserta_id=?, kegiatan_id=?, alasan=?, nosertifikat=? WHERE id=?";
            $this->db->query($sql,$data);
    }

    public function save($data){
            $sql = "INSERT INTO daftar (id, tanggal_daftar, users_id, kategori_peserta_id, kegiatan_id, alasan, nosertifikat)
                VALUES (default,now(),?,?,?,?,?)";
            $this->db->query($sql,$data);
    }

}