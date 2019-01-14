<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("karyawan_model");
    }

    public function index()
    {
        $data["karyawan"] = $this->karyawan_model->getAll();
        $this->load->view("admin/karyawan/list", $data);
    }

}
