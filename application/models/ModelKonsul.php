<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelKonsul extends CI_Model
{
    public function index(){
        date_default_timezone_set('Asia/Jakarta');
        $nama_pasien = $this->input->post('nama_pasien');
        $alamat_pasien = $this->input->post('alamat');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $kategori_anak= $this->input->post('kategori_anak');
        $bb= $this->input->post('berat_badan');
        $tb= $this->input->post('tinggi_badan');

        $konsul = array (
            'nama_pasien' => $nama_pasien,
            'alamat_pasien' => $alamat_pasien,
            'jenis_kelamin' => $jenis_kelamin,
            'tgl_lahir' => $tgl_lahir,
            'kategori_anak' => $kategori_anak,
            'berat_badan' => $bb,
            'tinggi_badan' => $tb,
            'tgl_konsultasi' => date('Y-m-d H:i:s'),
        );
        $this->db->insert('konsultasi', $konsul);
        return TRUE;
    }
    public function cekData(){
        return $this->db->get('konsultasi');
    }

    public function simpanData($data, $table){
        $this->db->insert($table,$data);
    }

    public function getDataWhere($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function updateData($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapusData($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id){
        $result = $this->db->where('id', $id)
                            ->limit(1)
                            ->get('konsultasi');
        if($result->num_rows() > 0) {
            return $result->row();
        }
        else{
            return array();
        }
    }

    public function detailBarang($id){
        $result = $this->db->where('id', $id)->get('konsultasi');
        if($result->num_rows() > 0){
            return $result->result();
        }
        else{
            return false;
        }
    }
}