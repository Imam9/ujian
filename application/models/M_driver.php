
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_driver extends CI_Model {

    private $table = 'tbl_driver';

    public function get_all(){
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($id_driver){
        $this->db->where('id_driver', $id_driver);
        return $this->db->get($this->table)->result();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function update($data, $id_driver){
        $this->db->where('id_driver', $id_driver)->update($this->table, $data);
    }

    public function delete($id_driver){
        $this->db->where('id_driver', $id_driver)->delete($this->table);
    }

}

/* End of file ModelName.php */





