<?php defined('BASEPATH') OR exit('No direct script acces allowed');

class karyawan_model extends CI_Model
{
    private $_table = "karyawan";

    public $id_karyawan;
    public $nama_karyawan;
    public $alamat;
    public $telepon;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}
?>
