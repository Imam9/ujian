<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => "Data Dashboard",
            'driver_jarak_jauh' => $this->M_dashboard->driver_jarak_jauh(),
            'rute_cost_terbanyak' => $this->M_dashboard->rute_cost_terbanyak(),
        );
        $this->templates->admin('v_dashboard', $data);
    }

}


?>