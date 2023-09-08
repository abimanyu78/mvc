<?php

class Komli_model{
    private $table = 'komli';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllBlog(){
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }
    public function getKomliById($id){
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function tambahDataKomli($data){
        $query = "INSERT INTO komli VALUES ('', :komli)";
        $this->db->query($query);
        $this->db->bind('komli', $data['komli']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataKomli($id){
        $query = "DELETE FROM komli WHERE id =:id";

        $this->db->query($query);
        $this->db->bind('id',$id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataKomli($data){
    $query = "UPDATE komli SET
                komli = :komli
                WHERE id = :id";
        
    $this->db->query($query);
    $this->db->bind('komli', $_POST['komli']);
    $this->db->bind('id', $_POST['id']);
    $this->db->execute();
    return $this->db->rowCount();
    }
}
?>