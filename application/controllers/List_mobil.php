<?php

class list_mobil extends CI_Controller
{
    public function index()
    {
      $this->load->view('list/navbar');
      $this->load->view('list/mobil');
      $this->load->view('template/contact');
      $this->load->view('template/footer');
    }

}
