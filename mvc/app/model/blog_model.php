<?php

class Blog_model{
    private $table = 'data_guru';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllBlog(){
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }
    public function getBlogById($id){
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function tambahDataGuru($data){
        $query = "INSERT INTO data_guru VALUES ('', :nama, :komli, :alamat)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('komli', $data['komli']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataGuru($id){
        $query = "DELETE FROM data_guru WHERE id =:id";

        $this->db->query($query);
        $this->db->bind('id',$id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataGuru($data){
    $query = "UPDATE data_guru SET
                nama = :nama,
                komli = :komli,
                alamat = :alamat
                WHERE id = :id";
        
    $this->db->query($query);
    $this->db->bind('nama', $_POST['nama']);
    $this->db->bind('komli', $_POST['komli']);
    $this->db->bind('alamat', $_POST['alamat']);
    $this->db->bind('id', $_POST['id']);
    $this->db->execute();
    return $this->db->rowCount();
    }
}
?>