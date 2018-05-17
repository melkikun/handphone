<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    
    public function __construct()
    {
        parent::__construct();
    }
    
    function simpanGejalaKerusakan($param)
    {
        $insert = $this->db->insert('gejala_kerusakan', $param);
        return $insert;
        
    }
    
    function cekDuplikatKodeGejala($param)
    {
        $this->db->from('gejala_kerusakan');
        $this->db->where('kode', $param['kode']);
        $query = $this->db->get();
        return $query->result_array();
        
    }
    
    function lihatGejalaKerusakan()
    {
        $this->db->from('gejala_kerusakan');
        $this->db->order_by('kode', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function simpanJenisKerusakan($param)
    {
        $insert = $this->db->insert('jenis_kerusakan', $param);
        return $insert;
    }
    
    function lihatJenisKerusakan()
    {
        $this->db->from('jenis_kerusakan');
        $this->db->order_by('kode', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function cekDuplikatKodeJenis($param)
    {
        $this->db->from('jenis_kerusakan');
        $this->db->where('kode', $param['kode']);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function simpanSolusiKerusakan($param)
    {
        $insert = $this->db->insert('solusi_kerusakan', $param);
        return $insert;
    }
    
    function cekDuplikatKodeSolusi($param)
    {
        $this->db->from('solusi_kerusakan');
        $this->db->where('kode', $param['kode']);
        $query = $this->db->get();
        return $query->result_array();
        
    }
    function lihatSolusiKerusakan()
    {
        $this->db->from('solusi_kerusakan');
        $this->db->order_by('nama', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    
    function deleteGejala($id)
    {
        $this->db->where('id', $id);
        $delete = $this->db->delete('gejala_kerusakan');
        return ($delete);
    }

    function deleteJenis($id)
    {
        $this->db->where('id', $id);
        $delete = $this->db->delete('jenis_kerusakan');
        return ($delete);
    }

    function deleteSolusi($id)
    {
        $this->db->where('id', $id);
        $delete = $this->db->delete('solusi_kerusakan');
        return ($delete);
    }
    
    function lihatGejalaKerusakanById($id)
    {
        $this->db->from('gejala_kerusakan');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    function lihatJenisKerusakanById($id)
    {
        $this->db->from('jenis_kerusakan');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    function lihatSolusiKerusakanById($id)
    {
        $this->db->from('solusi_kerusakan');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function updateGejalaKerusakan($param)
    {
        $data = array(
            "nama" => $param['nama'],
            "cf" => $param['cf']
        );
        $this->db->where('id', $param['id']);
        $status = $this->db->update('gejala_kerusakan', $data);
        return ($status);
    }

    function updateJenisKerusakan($param)
    {
        $data = array(
            "nama" => $param['nama']
        );
        $this->db->where('id', $param['id']);
        $status = $this->db->update('jenis_kerusakan', $data);
        return ($status);
    }

    function updateSolusiKerusakan($param)
    {
        $data = array(
            "nama" => $param['nama']
        );
        $this->db->where('id', $param['id']);
        $status = $this->db->update('solusi_kerusakan', $data);
        return ($status);
    }
    
    function getSolusi()
    {
        $this->db->from('solusi_kerusakan');
        $this->db->order_by('id', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function getGejala()
    {
        $this->db->from('gejala_kerusakan');
        $this->db->order_by('id', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function getJenis()
    {
        $this->db->from('jenis_kerusakan');
        $this->db->order_by('id', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function insertRelasi($param)
    {
        //delete baris
        $deleteJenis = $this->db->delete('relasi', array(
            'id_jenis' => $param['jenis'],
            'id_solusi' => $param['solusi']
        ));
        
        $array = array();
        for ($i = 0; $i < count($param['gejala']); $i++) {
            $data = array(
                "id_jenis" => $param['jenis'],
                "id_solusi" => $param['solusi'],
                "id_gejala" => $param['gejala'][$i]
            );
            array_push($array, $data);
        }
        $insertGejala = $this->db->insert_batch('relasi', $array);
        
        return $insertGejala;
    }
    
}

/* End of file Gejala_kerusakan */
/* Location: ./application/models/Gejala_kerusakan */