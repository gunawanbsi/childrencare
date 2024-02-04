<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Tamu extends CI_Controller{

    function __construct(){
        parent :: __construct();
    }

    public function index(){
        $data['judul'] = "Home";
        $this->load->view('header', $data);
        $this->load->view('home', $data);
        $this->load->view('footer', $data);
    }
    public function artikel(){
        $data['judul'] = "Artikel";
        $this->load->view('header', $data);
        $this->load->view('artikel', $data);
        $this->load->view('footer', $data);
    }
    public function konsul(){
        $data['judul'] = "Konsultasi";
        $this->load->view('header', $data);
        $this->load->view('konsul', $data);
        $this->load->view('footer', $data);
    }
    public function about(){
        $data['judul'] = "Tentang Kami";
        $this->load->view('header', $data);
        $this->load->view('tentangkami', $data);
        $this->load->view('footer', $data);
    }
}