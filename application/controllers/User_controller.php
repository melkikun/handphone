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
    }
    
    function index()
    {
        $data['header'] = $this->load->view("users/header.php", '', TRUE);
        $this->load->view('users/dashboard', $data);
    }
    
}