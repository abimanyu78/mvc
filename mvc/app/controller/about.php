<?php

class About extends Controller{
    public function index(){
        $data['judul'] = "Blog";
        $data['blog'] = $this->model("Blog_model")->getAllBlog();
    }
}

?>