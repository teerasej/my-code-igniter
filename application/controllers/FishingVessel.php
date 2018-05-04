<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class FishingVessel extends CI_Controller {

    public function index()
    {
        $this->load->model('fishingvessel_model');
        $result = $this->fishingvessel_model->get_all();

        $data['vessels'] = $result;

        $this->load->view('header');
        $this->load->view('fishing-vessel/index', $data);
        $this->load->view('footer');
    }

    public function all()
    {
        echo 'Show all vessels...'; 
    }

    public function new_vessel()
    {
        $this->load->view('header');
        $this->load->view('fishing-vessel/new-ship');
        $this->load->view('footer');
    }

    public function new_success()
    {

    }



}

/* End of file FishingVessel.php */


?>