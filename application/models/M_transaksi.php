
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {

    private $table = 'tbl_transaksi';

    public function get_all(){
        $this->db->select('*');
        $this->db->from('tbl_transaksi tt');
        $this->db->join('tbl_driver dr', 'dr.id_driver = tt.id_driver', 'inner');
        $this->db->join('tbl_rute tr', 'tr.id_rute = tt.id_rute', 'inner');
        $this->db->order_by('tt.id_transaksi','ASC');
        return $this->db->get()->result();
    }

    public function get_by_id($id_transaksi){
        $this->db->where('id_transaksi', $id_transaksi);
        return $this->db->get($this->table)->row();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function update($data, $id_transaksi){
        $this->db->where('id_transaksi', $id_transaksi)->update($this->table, $data);
    }

    public function delete($id_transaksi){
        $this->db->where('id_transaksi', $id_transaksi)->delete($this->table);
    }

}

/* End of file ModelName.php */





