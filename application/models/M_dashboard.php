
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

   public function driver_jarak_jauh(){
    $this->db->select('MAX(tr.distance) as jumlah, dr.nama');
    $this->db->from('tbl_transaksi tt');
    $this->db->join('tbl_driver dr', 'dr.id_driver = tt.id_driver', 'inner');
    $this->db->join('tbl_rute tr', 'tr.id_rute = tt.id_rute', 'inner');
    $this->db->where('tt.date', '2021-01-03');
    
    return $this->db->get()->row();
   }

   public function driver_cost_terbanyak(){
    $this->db->select('MAX(tr.distance) as jumlah');
    $this->db->from('tbl_transaksi tt');
    $this->db->join('tbl_driver dr', 'dr.id_driver = tt.id_driver', 'inner');
    $this->db->join('tbl_rute tr', 'tr.id_rute = tt.id_rute', 'inner');
    $this->db->where('tt.date', '2021-01-03');
    
    return $this->db->get()->row();
   }


   public function rute_cost_terbanyak(){
    $this->db->select('MAX(tt.total_cost) as total, tr.point_start, tr.point_end, tr.distance');
    $this->db->from('tbl_transaksi tt');
    $this->db->join('tbl_driver dr', 'dr.id_driver = tt.id_driver', 'inner');
    $this->db->join('tbl_rute tr', 'tr.id_rute = tt.id_rute', 'inner');    
    return $this->db->get()->row();
   }
}

/* End of file ModelName.php */





