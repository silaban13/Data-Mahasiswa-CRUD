<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $data['Bnama'] = $this->model('User_model')->getUser();
        // ini saya yang buat
        $data['title'] = 'About';
        // ini kepala halama web nya
        $this->view('templates/header', $data);
        // disini body nya
        $this->view('home/index', $data);
        // disini akhirnya
        $this->view('templates/footer');
    }
}

?>