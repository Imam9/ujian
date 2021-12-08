
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rute extends CI_Model {

    private $table = 'tbl_rute';

    public function get_all(){
        return $this->db->get($this->table)->result();  
    }

    public function get_by_id($id_rute){
        $this->db->where('id_rute', $id_rute);
        return $this->db->get($this->table)->row();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function update($data, $id_rute){
        $this->db->where('id_rute', $id_rute)->update($this->table, $data);
    }

    public function delete($id_rute){
        $this->db->where('id_rute', $id_rute)->delete($this->table);
    }

}

/* End of file ModelName.php */





