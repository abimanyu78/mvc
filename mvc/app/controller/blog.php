<?php

class blog extends Controller{
    public function index(){
        $data['judul'] = "Data Guru";
        $data['blog'] = $this->model("Blog_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['judul'] = "Detail Guru";
        $data['guru'] = $this->model("Blog_model")->getBlogById($id);
        $this->view('templates/header', $data);
        $this->view('blog/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
        if($this->model('Blog_model')->tambahDataGuru($_POST) > 0){
            Flasher::setFlash('berhasil','ditambahkan','succes');
            header('Location: '. BASE_URL . '/blog');
            exit;
        }else{
            Flasher::setFlash('gagal','ditambahkan','danger');
            header('Location: ' .BASE_URL. '/blog');
            exit;
        }
    }

    public function hapus($id){
        if( $this->model('Blog_model')->hapusDataGuru($id) > 0){
            Flasher::setFlash('berhasil','dihapus','succes');
            header('Location: ' .BASE_URL. '/blog');
            exit;
        }else{
            Flasher::setFlash('gagal','dihapus','danger');
            header('Location: ' .BASE_URL. '/blog');
            exit;
        }
    }

    public function getubah(){
        echo json_encode($this->model('Blog_model')->getBlogById($_POST['id']));
    }

    public function ubah(){
        if( $this->model('Blog_model')->ubahDataGuru($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASE_URL . '/blog');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASE_URL . '/blog');
            exit;
        } 
    }
}
?>