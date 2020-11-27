<?php

class list_wisata extends CI_Controller
{
    public function index()
    {
      $this->load->view('list/navbar');
      $this->load->view('list/wisata');
      $this->load->view('template/contact');
      $this->load->view('template/footer');
    }

}
