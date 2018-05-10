<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends CI_Controller {

    // /api/country
    public function index()
    {
        
    }

    // /api/country/all
    public function all()
    {
        $this->load->model('country_model');
        $data = $this->country_model->get_all();

        echo json_encode($data);
    }

}

/* End of file Country.php */


?>