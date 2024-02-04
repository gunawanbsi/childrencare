<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelPetugas extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('petugas', $data);
    }
    public function cekData($where = null)
    {
        return $this->db->get_where('petugas', $where);
    }
    public function getPetugasWhere($where)
    {
        return $this->db->get_where('petugas', $where);
    }

    public function hapusPetugas($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function updatePetugas($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function detailPetugas($id){
        $result = $this->db->where('id', $id)->get('petugas');
        if($result->num_rows() > 0){
            return $result->result();
        }
        else{
            return false;
        }
    }
    public function cekPetugasAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }
    public function getPetugasLimit()
    {
        $this->db->select('*');
        $this->db->from('petugas');
        $this->db->limit(10, 0);
        return $this->db->get();
    }
}
