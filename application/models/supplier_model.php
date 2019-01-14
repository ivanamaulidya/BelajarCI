<?php defined('BASEPATH') OR exit('No direct script acces allowed');

class supplier_model extends CI_Model
{
    private $_table = "supplier";

    public $supplier_id;
    public $supllier_name;
    public $supllier_address;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}
?>
