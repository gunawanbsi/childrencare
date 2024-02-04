<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
        $data['konsul'] = $this->ModelKonsul->cekData()->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer');
    }

    public function profile()
    {
        $data['judul'] = 'Profile Saya';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('admin/footer');
    }

    public function ubahProfile()
    {
        $data['judul'] = 'Ubah Profil';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', ['required' => 'Nama tidak Boleh Kosong']);

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/ubahprofile', $data);
            $this->load->view('admin/footer');
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
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Profil Berhasil diubah </div>');
            redirect('admin/profile');
        }
    }
    public function user(){
        $data['judul'] = 'Data User';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['member'] = $this->ModelUser->cekData(['role_id' => (2)])->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/datauser', $data);
        $this->load->view('admin/footer', $data);
    }

    public function hapusUser($id)
    {
        $where = array('id' => $id);
        $this->ModelUser->hapusUser($where, 'user');
        redirect('admin/user');
    }
    public function petugas()
    {
        $data['judul'] = 'Data Petugas';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['petugas'] = $this->ModelPetugas->cekData()->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/petugas/datapetugas', $data);
        $this->load->view('admin/footer');
    } 
    
    public function createPetugas(){
        $nama_petugas = $this->input->post('nama_petugas');
        $email_petugas = $this->input->post('email_petugas');
        $jabatan = $this->input->post('jabatan');
        $alamat = $this->input->post('alamat');
        $no_telepon = $this->input->post('no_telepon');
        $image = $_FILES['image']['name'];
        if ($image = ''){}
        else {
            $config['upload_path'] = './assets/img/upload/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')){
                echo "Gambar Gagal di Upload";
            }
            else{
                $image=$this->upload->data('file_name');
            }
        }
        $data = [
            'nama_petugas' => $nama_petugas,
            'email_petugas' => $email_petugas,
            'jabatan' => $jabatan,
            'alamat' => $alamat,
            'no_telepon' => $no_telepon,
            'image' => $image
        ];
        $this->ModelPetugas->simpanData($data, 'petugas');
        redirect('admin/petugas');
    }

    public function editPetugas($id)
    {
        $data['judul'] = 'Edit Data Petugas';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['petugas'] = $this->ModelPetugas->getPetugasWhere($where, 'petugas')->result();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/petugas/editpetugas', $data);
        $this->load->view('admin/footer', $data);
    }

    public function ubahPetugas()
    {
        $id = $this->input->post('id');
        $nama_petugas = $this->input->post('nama_petugas');
        $email_petugas = $this->input->post('email_petugas');
        $jabatan = $this->input->post('jabatan');
        $alamat = $this->input->post('alamat');
        $no_telepon = $this->input->post('no_telepon');

        $data = [
            'nama_petugas' => $nama_petugas,
            'email_petugas' => $email_petugas,
            'jabatan' => $jabatan,
            'alamat' => $alamat,
            'no_telepon' => $no_telepon,
        ];
        $where = [
            'id' => $id
        ];
        $this->ModelPetugas->updatePetugas($where, $data, 'petugas');
        redirect('admin/petugas');
    }

    public function hapusPetugas($id)
    {
        $where = array('id' => $id);
        $this->ModelPetugas->hapusPetugas($where, 'petugas');
        redirect('admin/petugas');
    }
    public function konsul()
    {
        $data['judul'] = 'Data Konsultasi Pasien';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['konsul'] = $this->ModelKonsul->cekData()->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/datakonsul', $data);
        $this->load->view('admin/footer');
    } 
}