<?php

class About extends Controller {
    public function index($Inama = 'Mariono Silaban', $Ttinggal = 'Jakarta')
    {

         $data['Inama'] = $Inama;
         $data['Ttinggal'] = $Ttinggal;
        //  ini untuk judul
        $data['judul'] = 'About_index';
        //  ini kepala web, ini untuk bagian about doang
         $this->view('templates/header', $data);
        //  ini body
         $this->view('about/index', $data);
        //  ini akhir
        $this->view('templates/footer');
        //echo "Halo, nama saya $Inama, saya tinggal di $Ttinggal";

    }

    public function page()
    {   
        $data['judul'] = 'About_page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}

?>