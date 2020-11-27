<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "Halaman Driver";
        $data['driver'] = $this->Model_driver->getStatusDriver();
        $this->load->view('layout/header', $data);
        $this->load->view('driver/index', $data);
        $this->load->view('layout/footer');
    }

    public function dashboard()
    {
      $this->load->view('template/header');
      $this->load->view('template/banner');
      $this->load->view('template/why');
      $this->load->view('template/list_mobil');
      $this->load->view('template/about_us');
      $this->load->view('template/list_wisata');
      $this->load->view('template/contact');
      $this->load->view('template/footer');
    }

    public function updateDriver()
    {
        $update = $this->input->post('update');
        if ($update == "Aktifkan") {
            // $data['driver'] = $this->Model_driver->getStatusDriver();
            // var_dump($data);
            $this->Model_driver->activated();
            header("Location:" . base_url('Home/') .  "");
        } else {
            // $data['driver'] = $this->Model_driver->getStatusDriver();
            // var_dump($data);
            $this->Model_driver->nonactivated();
            header("Location:" . base_url('Home/') .  "");
        }
        // $data['driver'] = $this->Model_driver->activated();
        // header("Location:" . base_url('Home/') .  "");
    }
}
