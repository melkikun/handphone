<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * summary
 */
class User_controller extends CI_Controller
{
    /**
     * summary
     */
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');    
        $this->load->model('Admin_model');
    }
    
    function index()
    {
        $this->cekSession();
        $data['header'] = $this->load->view("users/header.php", '', TRUE);
        $data['gejala'] = $this->Admin_model->lihatGejalaKerusakan();
        $this->load->view('users/dashboard', $data);
    }

    function submit(){
        $data['header'] = $this->load->view("users/header.php", '', TRUE);
        $data['gejala'] = $this->Admin_model->lihatGejalaKerusakan();
        $this->load->view('users/hasil', $data);
    }

    function cekSession() {
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
    }

     function logout() {
        $this->session->unset_userdata(logged_in);
        redirect('login');
    }

    function login() {
        if ($this->session->userdata('logged_in')) {
            redirect('dashboard');
        } else {
            $this->load->view('users/login');
        }
    }

    function register() {
        if ($this->session->userdata('logged_in')) {
            redirect('dashboard');
        } else {
            $this->load->view('users/register');
        }
    }

    function userRegister() {
        echo(123);
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('users/register');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $array = array(
                "username" => $username,
                "password" => $password,
            );
            $duplikat = $this->duplikatUserRegister($username);
            if ($duplikat->result_array() != NULL) {
                $this->session->set_flashdata("duplikat", "User sudah ada silahkan ganti dengan yang lain");
                return redirect("register");
            } else {
                $data = $this->Admin_model->registerUser($array);
                if ($data == 1) {
                    $this->session->set_flashdata("berhasil_register", "anda berhasil register, silahkan login menggunakan username dan password");
                    return redirect("login");
                } else {
                    $this->session->set_flashdata("gagal_register", "anda gagal register, hubungi administrator");
                    return redirect("register");
                }
            }
        }
    }

    function duplikatUserRegister($username) {
        return $this->Admin_model->cekDuplikatUserRegister($username);
    }

    function userLogin() {
        echo(123);
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('users/login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $array = array(
                "username" => $username,
                "password" => $password, 
                "role" => 0
            );
            $data = $this->Admin_model->loginUser($array);
            if ($data->result_array() == NULL) {
                $this->session->set_flashdata("gagal_login", "Username atau password salah");
                return redirect("login");
            } else {
                $session = array(
                    "id" => $data->row()->id,
                    "username" => $data->row()->username
                );
                $this->session->set_userdata("logged_in", $session);
                return redirect('/');
            }
        }
    }
    
}