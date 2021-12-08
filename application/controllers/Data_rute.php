<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_rute extends CI_Controller {
    
    public function index()
    {
        $data = array(
            'title' => 'Data rute',
            'data_rute' => $this->M_rute->get_all(),
        );
        $this->templates->admin('v_data_rute', $data);
    }

    public function insert(){
        
        $this->form_validation->set_rules('point_start', 'Point Start', 'required');
        $this->form_validation->set_rules('point_end', 'Point End', 'required');
        $this->form_validation->set_rules('distance', 'Distance', 'required');
        $this->form_validation->set_rules('standart_time', 'Standart Time', 'required');
        $this->form_validation->set_rules('priceperkm', 'Price Per KM', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'point_start' => $this->input->post('point_start', TRUE),
                'point_end' => $this->input->post('point_end', TRUE),
                'distance' => $this->input->post('distance', TRUE),
                'standart_time' => $this->input->post('standart_time', TRUE),
                'priceperkm' => $this->input->post('priceperkm', TRUE),
            );
     
             $this->M_rute->insert($data);
             $this->flash_message->success('Tambahkan', 'data-rute');
        }
    }
    public function update(){
       

        $this->form_validation->set_rules('point_start', 'Point Start', 'required');
        $this->form_validation->set_rules('point_end', 'Point End', 'required');
        $this->form_validation->set_rules('distance', 'Distance', 'required');
        $this->form_validation->set_rules('standart_time', 'Standart Time', 'required');
        $this->form_validation->set_rules('priceperkm', 'Price Per KM', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $id_rute = $this->input->post('id_rute', TRUE);
            $data = array(
                'point_start' => $this->input->post('point_start', TRUE),
                'point_end' => $this->input->post('point_end', TRUE),
                'distance' => $this->input->post('distance', TRUE),
                'standart_time' => $this->input->post('standart_time', TRUE),
                'priceperkm' => $this->input->post('priceperkm', TRUE),
            );
     
            $this->M_rute->update($data, $id_rute);
            $this->flash_message->success('Update', 'data-rute');
        }
        
    }

    public function delete($id_rute){       
        $this->M_rute->delete($id_rute);
        $this->flash_message->success('Di hapus', 'data-rute');
    
    }

}

/* End of file Data_rute.php */
