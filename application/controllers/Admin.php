<?php

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('template_admin/header');
        $this->load->view('admin/tmp_admin');
    }

    public function login()
    {
        $this->load->view('admin/login');
    }

    public function mobil()
    {
        $this->load->view('template_admin/header');
        $this->load->view('admin/mobil/index');
        $this->load->view('template_admin/footer');
    }

    public function driver()
    {
        $this->load->view('template_admin/header');
        $this->load->view('admin/driver/index');
        $this->load->view('template_admin/footer');
    }

    public function wisata()
    {
        $this->load->view('template_admin/header');
        $this->load->view('admin/wisata/index');
        $this->load->view('template_admin/footer');
    }

}
