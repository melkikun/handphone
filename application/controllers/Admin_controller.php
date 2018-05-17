<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * summary
 */
class Admin_controller extends CI_Controller
{
    /**
     * summary
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }
    
    function index()
    {
        $data['footer'] = $this->load->view("admin/footer.php", '', TRUE);
        $data['header'] = $this->load->view("admin/header.php", '', TRUE);
        $this->load->view('admin/index', $data);
    }
    
    function tambah_gejala()
    {
        $data['footer'] = $this->load->view("admin/footer.php", '', TRUE);
        $data['header'] = $this->load->view("admin/header.php", '', TRUE);
        $this->load->view('admin/tambah_gejala', $data);
    }
    
    function edit_gejala()
    {
        $data['gejala'] = $this->Admin_model->lihatGejalaKerusakan();
        $data['footer'] = $this->load->view("admin/footer.php", '', TRUE);
        $data['header'] = $this->load->view("admin/header.php", '', TRUE);
        $this->load->view('admin/edit_gejala', $data);
    }

    function edit_jenis(){
        $data['jenis'] = $this->Admin_model->lihatJenisKerusakan();
        $data['footer'] = $this->load->view("admin/footer.php", '', TRUE);
        $data['header'] = $this->load->view("admin/header.php", '', TRUE);
        $this->load->view('admin/edit_jenis', $data);
    }

    function edit_solusi(){
        $data['solusi'] = $this->Admin_model->lihatSolusiKerusakan();
        $data['footer'] = $this->load->view("admin/footer.php", '', TRUE);
        $data['header'] = $this->load->view("admin/header.php", '', TRUE);
        $this->load->view('admin/edit_solusi', $data);
    }
    
    function tambah_jenis()
    {
        $data['footer'] = $this->load->view("admin/footer.php", '', TRUE);
        $data['header'] = $this->load->view("admin/header.php", '', TRUE);
        $this->load->view('admin/tambah_jenis', $data);
    }
    
    function lihat_gejala()
    {
        $data['gejala'] = $this->Admin_model->lihatGejalaKerusakan();
        $data['footer'] = $this->load->view("admin/footer.php", '', TRUE);
        $data['header'] = $this->load->view("admin/header.php", '', TRUE);
        $this->load->view('admin/lihat_gejala', $data);
    }
    
    function lihat_jenis()
    {
        $data['gejala'] = $this->Admin_model->lihatJenisKerusakan();
        $data['footer'] = $this->load->view("admin/footer.php", '', TRUE);
        $data['header'] = $this->load->view("admin/header.php", '', TRUE);
        $this->load->view('admin/lihat_jenis', $data);
    }
    
    function post_tambah_gejala()
    {
        $nama = $this->input->post('nama');
        $cf   = $this->input->post('cf');
        $kode = $this->input->post("kode");
        if ($kode < 10) {
            $kode = "G0" . $kode;
        } else {
            $kode = "G" . $kode;
        }
        $request = array(
            "nama" => $nama,
            "cf" => $cf,
            "kode" => $kode
        );
        
        $duplikat = $this->Admin_model->cekDuplikatKodeGejala($request);
        if (count($duplikat) == 0) {
            $response = $this->Admin_model->simpanGejalaKerusakan($request);
            if ($response == 1) {
                $this->session->set_flashdata('berhasil', '1');
            } else {
                $this->session->set_flashdata('berhasil', '0');
            }
            redirect('admin/tambahgejala', 'refresh');
        } else {
            $this->session->set_flashdata('duplikat', '1');
            redirect('admin/tambahgejala', 'refresh');
        }
    }
    
    function post_tambah_jenis()
    {
        $nama = $this->input->post('nama');
        $kode = $this->input->post('kode');
        if ($kode < 10) {
            $kode = "K0" . $kode;
        } else {
            $kode = "K" . $kode;
        }
        $request  = array(
            "nama" => $nama,
            "kode" => $kode
        );
        $duplikat = $this->Admin_model->cekDuplikatKodeJenis($request);
        if (count($duplikat) == 0) {
            
            $response = $this->Admin_model->simpanJenisKerusakan($request);
            if ($response == 1) {
                $this->session->set_flashdata('berhasil', '1');
            } else {
                $this->session->set_flashdata('berhasil', '0');
            }
            redirect('admin/tambahjenis', 'refresh');
        } else {
            $this->session->set_flashdata('duplikat', '1');
            redirect('admin/tambahjenis', 'refresh');
        }
    }
    
    
    function tambah_solusi()
    {
        $data['footer'] = $this->load->view("admin/footer.php", '', TRUE);
        $data['header'] = $this->load->view("admin/header.php", '', TRUE);
        $this->load->view('admin/tambah_solusi', $data);
    }
    
    function post_tambah_solusi()
    {
        $kode     = "S" . $this->input->post("kode");
        $nama     = $this->input->post('nama');
        $request  = array(
            "kode" => $kode,
            "nama" => $nama
        );
        $duplikat = $this->Admin_model->cekDuplikatKodeSolusi($request);
        if (count($duplikat) == 0) {
            $response = $this->Admin_model->simpanSolusiKerusakan($request);
            if ($response == 1) {
                $this->session->set_flashdata('berhasil', '1');
            } else {
                $this->session->set_flashdata('berhasil', '0');
            }
            redirect('admin/tambahsolusi', 'refresh');
        } else {
            $this->session->set_flashdata('duplikat', '1');
            redirect('admin/tambahsolusi', 'refresh');
        }
    }
    
    function lihat_solusi()
    {
        $data['gejala'] = $this->Admin_model->lihatSolusiKerusakan();
        $data['footer'] = $this->load->view("admin/footer.php", '', TRUE);
        $data['header'] = $this->load->view("admin/header.php", '', TRUE);
        $this->load->view('admin/lihat_solusi', $data);
    }
    
    function deleteGejala($param)
    {
        $response = $this->Admin_model->deleteGejala($param);
        if ($response == 1) {
            $this->session->set_flashdata('berhasil', '1');
        } else {
            $this->session->set_flashdata('berhasil', '0');
        }
        redirect('admin/editgejala', 'refresh');
    }

    function deleteJenis($param)
    {
        $response = $this->Admin_model->deleteJenis($param);
        if ($response == 1) {
            $this->session->set_flashdata('berhasil', '1');
        } else {
            $this->session->set_flashdata('berhasil', '0');
        }
        redirect('admin/editjenis', 'refresh');
    }

    function deleteSolusi($param)
    {
        $response = $this->Admin_model->deleteSolusi($param);
        if ($response == 1) {
            $this->session->set_flashdata('berhasil', '1');
        } else {
            $this->session->set_flashdata('berhasil', '0');
        }
        redirect('admin/editsolusi', 'refresh');
    }
    
    function editGejala($param)
    {
        $data['data']   = $this->Admin_model->lihatGejalaKerusakanById($param);
        $data['footer'] = $this->load->view("admin/footer.php", '', TRUE);
        $data['header'] = $this->load->view("admin/header.php", '', TRUE);
        $this->load->view('admin/form_edit_gejala', $data);
    }

    function editJenis($param)
    {
        $data['data']   = $this->Admin_model->lihatJenisKerusakanById($param);
        $data['footer'] = $this->load->view("admin/footer.php", '', TRUE);
        $data['header'] = $this->load->view("admin/header.php", '', TRUE);
        $this->load->view('admin/form_edit_jenis', $data);
    }

    function editSolusi($param)
    {
        $data['data']   = $this->Admin_model->lihatSolusiKerusakanById($param);
        $data['footer'] = $this->load->view("admin/footer.php", '', TRUE);
        $data['header'] = $this->load->view("admin/header.php", '', TRUE);
        $this->load->view('admin/form_edit_solusi', $data);
    }
    
    function postEditGejala()
    {
        $nama = $this->input->post('nama');
        $cf   = $this->input->post('cf');
        $id   = $this->input->post('id');
        
        $request = array(
            "nama" => $nama,
            "cf" => $cf,
            "id" => $id
        );
        
        $response = $this->Admin_model->updateGejalaKerusakan($request);
        if ($response == 1) {
            $this->session->set_flashdata('berhasil_update', '1');
        } else {
            $this->session->set_flashdata('berhasil_update', '0');
        }
        redirect('admin/editgejala', 'refresh');
    }

    function postEditJenis()
    {
        $nama = $this->input->post('nama');
        $id   = $this->input->post('id');
        
        $request = array(
            "nama" => $nama,
            "id" => $id
        );
        
        $response = $this->Admin_model->updateJenisKerusakan($request);
        if ($response == 1) {
            $this->session->set_flashdata('berhasil_update', '1');
        } else {
            $this->session->set_flashdata('berhasil_update', '0');
        }
        redirect('admin/editjenis', 'refresh');
    }

    function postEditSolusi()
    {
        $nama = $this->input->post('nama');
        $id   = $this->input->post('id');
        
        $request = array(
            "nama" => $nama,
            "id" => $id
        );
        
        $response = $this->Admin_model->updateSolusiKerusakan($request);
        if ($response == 1) {
            $this->session->set_flashdata('berhasil_update', '1');
        } else {
            $this->session->set_flashdata('berhasil_update', '0');
        }
        redirect('admin/editsolusi', 'refresh');
    }

    function tambah_relasi()
    {
        $data['solusi'] = $this->Admin_model->getSolusi();
        $data['jenis']  = $this->Admin_model->getJenis();
        $data['gejala'] = $this->Admin_model->getGejala();
        $data['footer'] = $this->load->view("admin/footer.php", '', TRUE);
        $data['header'] = $this->load->view("admin/header.php", '', TRUE);
        $this->load->view('admin/tambah_relasi', $data);
    }
    
    function relasi_solusi_jenis_gejala()
    {
        $jenis  = $this->input->get('jenis');
        $solusi = $this->input->get('solusi');
        
        $query = $this->db->query("select r.*, jk.nama as nama_jenis, jk.kode as kode_jenis,
gk.nama as nama_gejala, gk.cf, gk.kode as kode_gejala,
sk.nama as nama_solusi, sk.kode as kode_solusi
 from relasi r
inner join jenis_kerusakan jk
on jk.id=r.id_jenis
inner join gejala_kerusakan gk 
on gk.id = r.id_gejala
inner join solusi_kerusakan sk
on sk.id = r.id_solusi
where r.id_jenis = '$jenis' and r.id_solusi = '$solusi'");
        echo json_encode($query->result_array());
    }
    
    function post_tambah_relasi()
    {
        $solusi = $this->input->post('solusi');
        $jenis  = $this->input->post('jenis');
        $gejala = $this->input->post('gejala');
        $param  = array(
            "solusi" => $solusi,
            "jenis" => $jenis,
            "gejala" => $gejala
        );
        $insert = $this->Admin_model->insertRelasi($param);
        echo json_encode($insert);
    }
    
    function lihat_relasi()
    {
        $data['gejala'] = $this->Admin_model->lihatGejalaKerusakan();
        $data['jenis'] = $this->Admin_model->lihatJenisKerusakan();
        $data['solusi'] = $this->Admin_model->lihatSolusiKerusakan();
        $data['footer'] = $this->load->view("admin/footer.php", '', TRUE);
        $data['header'] = $this->load->view("admin/header.php", '', TRUE);
        $this->load->view('admin/lihat_relasi', $data);
    }
    
}