<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['judul'] = 'Profil Saya';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('footer');
    }

    public function ubahProfil()
    {
        $data['judul'] = 'Ubah Profil';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', ['required' => 'Nama tidak Boleh Kosong']);

        if ($this->form_validation->run() == false) {
            $this->load->view('user/userheader', $data);
            $this->load->view('user/ubahprofile', $data);
            $this->load->view('footer');
            }
            else {
                $nama = $this->input->post('nama', true);
                $email = $this->input->post('email', true);
                //jika ada gambar yang akan diupload
                $upload_image = $_FILES['image']['name'];

                if ($upload_image) {
                    $config['upload_path'] = './assets/img/profile/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '300000';
                    $config['max_width'] = '10024';
                    $config['max_height'] = '10000';
                    $config['file_name'] = 'pro' . time();
                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('image')) {$gambar_lama = $data['user']['image'];
                        if ($gambar_lama != 'default.jpg') {unlink(FCPATH . 'assets/img/profile/' . $gambar_lama);
                        }       
                        $gambar_baru = $this->upload->data('file_name');
                        $this->db->set('image', $gambar_baru);
                    } 
                    else { }
                }

            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Profil Anda Berhasil di Ubah.
            </div>');
            redirect('user');
        }
    }
    public function home(){
        $data['judul'] = "Home";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('user/userhome', $data);
        $this->load->view('footer', $data);
    }
    public function artikel(){
        $data['judul'] = "Artikel";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('artikel', $data);
        $this->load->view('footer', $data);
    }
    public function konsul(){
        $data['judul'] = "Konsultasi";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('konsul', $data);
        $this->load->view('footer', $data);
    }
    public function about(){
        $data['judul'] = "Tentang Kami";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('tentangkami', $data);
        $this->load->view('footer', $data);
    }
    public function janin(){
        $data['judul'] = "Konsultasi Kehamilan";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['petugas'] = $this->ModelPetugas->getPetugasWhere(['jabatan' => ('Dokter Kandungan')])->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('konsultasi/janin', $data);
        $this->load->view('footer', $data);
    }
    public function bayi(){
        $data['judul'] = "Konsultasi Bayi";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['petugas'] = $this->ModelPetugas->getPetugasWhere(['jabatan' => ('Dokter Bayi')])->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('konsultasi/bayi', $data);
        $this->load->view('footer', $data);
    }
    public function balita(){
        $data['judul'] = "Konsultasi Balita";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['petugas'] = $this->ModelPetugas->getPetugasWhere(['jabatan' => ('Dokter Balita')])->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('konsultasi/balita', $data);
        $this->load->view('footer', $data);
    }
    public function anak(){
        $data['judul'] = "Konsultasi Anak";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['petugas'] = $this->ModelPetugas->getPetugasWhere(['jabatan' => ('Dokter Anak')])->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('konsultasi/anak', $data);
        $this->load->view('footer', $data);
    }
    public function proseskonsul(){
        $is_processed = $this->ModelKonsul->index();
        if($is_processed){
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" align="center" role="alert">Anda sudah terdaftar untuk Konsultasi.</div>');
            redirect('user/konsul');
        }
        else{
            echo "Maaf, Konsultasi Anda Gagal di Proses. Silahkan Coba Lagi Ya!!";
        }
    }
}