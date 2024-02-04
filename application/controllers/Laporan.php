<?php
defined('BASEPATH') or exit('No Direct script access allowed');
class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function LaporanUser()
    {
        $data['judul'] = 'Laporan Data User';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['member'] = $this->ModelUser->cekData(['role_id' => (2)])->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('laporan/laporan_user', $data);
        $this->load->view('admin/footer');
    }

    public function Cetak_User()
    {
        $data['member'] = $this->ModelUser->cekData(['role_id' => (2)])->result_array();

        $this->load->view('laporan/cetak_user', $data);
    }

    public function pdf_User()
    {
        $data['member'] = $this->ModelUser->cekData(['role_id' => (2)])->result_array();
        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/childrencare/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();
        $this->load->view('laporan/user_pdf', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan_data_user.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }

    public function excel_user()
    {
        $data['title'] = 'Laporan User';
        $data['member'] = $this->ModelUser->cekData(['role_id' => (2)])->result_array();
        $this->load->view('laporan/user_excel', $data);
    }

    public function LaporanPetugas()
    {
        $data['judul'] = 'Laporan Data Petugas';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['petugas'] = $this->ModelPetugas->cekData()->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('laporan/laporan_petugas', $data);
        $this->load->view('admin/footer');
    }

    public function Cetak_Petugas()
    {
        $data['petugas'] = $this->ModelPetugas->cekData()->result_array();

        $this->load->view('laporan/cetak_petugas', $data);
    }

    public function pdf_Petugas()
    {
        $data['petugas'] = $this->ModelPetugas->cekData()->result_array();
        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/childrencare/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();
        $this->load->view('laporan/petugas_pdf', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan_data_petugas.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }

    public function excel_petugas()
    {
        $data['title'] = 'Laporan Petugas';
        $data['petugas'] = $this->ModelPetugas->cekData()->result_array();
        $this->load->view('laporan/petugas_excel', $data);
    }

    public function LaporanKonsul()
    {
        $data['judul'] = 'Laporan Data Konsultasi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['konsul'] = $this->ModelKonsul->cekData()->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('laporan/laporan_konsul', $data);
        $this->load->view('admin/footer');
    }

    public function Cetak_Konsul()
    {
        $data['konsul'] = $this->ModelKonsul->cekData()->result_array();

        $this->load->view('laporan/cetak_konsul', $data);
    }

    public function pdf_Konsul()
    {
        $data['konsul'] = $this->ModelKonsul->cekData()->result_array();
        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/childrencare/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();
        $this->load->view('laporan/konsul_pdf', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan_data_konsul.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }

    public function excel_Konsul()
    {
        $data['title'] = 'Laporan Konsultasi';
        $data['konsul'] = $this->ModelKonsul->cekData()->result_array();
        $this->load->view('laporan/konsul_excel', $data);
    }
}