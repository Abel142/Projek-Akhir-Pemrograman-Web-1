<?php
class Model_kategori extends CI_Model
{
    public function data_mobil_listrik()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'mobil listrik'));
    }
    public function data_mobil_non_listrik()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'mobil non-listrik'));
    }
}
