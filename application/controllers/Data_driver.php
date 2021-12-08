<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_driver extends CI_Controller {


    public function index()
    {
        $data = array(
            'title' => 'Data driver',
            'data_driver' => $this->M_driver-> get_all(),
        );
        $this->templates->admin('v_data_driver', $data);
    }

    public function insert(){
        
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('platno', 'Plat No', 'required');

        
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'nama' => $this->input->post('nama', TRUE),
                'platno' => $this->input->post('platno', TRUE),
            );

            $this->M_driver->insert($data);
            $this->flash_message->success('Tambahkan', 'data-driver');
        }
    }


    public function update(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('platno', 'Plat No', 'required');

        
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        }else {
            $id_driver = $this->input->post('id_driver', TRUE);
            
            $data = array(
                'nama' => $this->input->post('nama', TRUE),
                'platno' => $this->input->post('platno', TRUE),
            );
        }
        $this->M_driver->update($data, $id_driver);
        $this->flash_message->success('Update', 'data-driver');
    }

    public function delete($id_driver){       
        $this->M_driver->delete($id_driver);
        $this->flash_message->success('Di hapus', 'data-driver');
    
    }
 
    
}

/* End of file Data_kategori.php */
