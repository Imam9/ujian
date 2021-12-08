<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_transaksi extends CI_Controller {
    
    public function index()
    {
        $data = array(
            'title' => 'Data rute',
            'data_rute' => $this->M_rute->get_all(),
            'data_driver' => $this->M_driver->get_all(),
            'data_transaksi' => $this->M_transaksi->get_all(),
        );
        
        $this->templates->admin('v_data_transaksi', $data);
    }

    public function insert(){
        
        $this->form_validation->set_rules('id_driver', 'id driver', 'required');
        $this->form_validation->set_rules('id_rute', 'id rute', 'required');
        $this->form_validation->set_rules('actual_time', 'actual time', 'required');
        $this->form_validation->set_rules('date', 'date', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {

            $date = date('Y-md-d');
            $id_rute = $this->input->post('id_rute', TRUE);

            $data_rute = $this->M_rute->get_data($id_rute);

            $total_cost = intval($data_rute->distance) * intval($data_rute->priceperkm);
            
            $data = array(
                'id_driver' => $this->input->post('id_driver', TRUE),
                'id_rute' => $id_rute,
                'actual_time' => $this->input->post('actual_time', TRUE),
                'date' => $this->input->post('date', TRUE),
                'total_cost' => $total_cost,
            );
     
             $this->M_transaksi->insert($data);
             $this->flash_message->success('Tambahkan', 'data-transaksi');
        }
    }
    public function update(){
       
        $this->form_validation->set_rules('id_driver', 'id driver', 'required');
        $this->form_validation->set_rules('id_rute', 'id rute', 'required');
        $this->form_validation->set_rules('actual_time', 'actual time', 'required');
        $this->form_validation->set_rules('date', 'date', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $id_transaksi = $this->input->post('id_transaksi', TRUE);
            $date = date('Y-md-d');
            $id_rute = $this->input->post('id_rute', TRUE);

            $data_rute = $this->M_rute->get_data($id_rute);

            $total_cost = intval($data_rute->distance) * intval($data_rute->priceperkm);
            
            $data = array(
                'id_driver' => $this->input->post('id_driver', TRUE),
                'id_rute' => $id_rute,
                'actual_time' => $this->input->post('actual_time', TRUE),
                'date' => $this->input->post('date', TRUE),
                'total_cost' => $total_cost,
            );
     
            $this->M_transaksi->update($data, $id_transaksi);
            $this->flash_message->success('Update', 'data-transaksi');
        }        
    }

    public function delete($id_transaksi){       
        $this->M_transaksi->delete($id_transaksi);
        $this->flash_message->success('Di hapus', 'data-transaksi');
    
    }

}

/* End of file Data_rute.php */
