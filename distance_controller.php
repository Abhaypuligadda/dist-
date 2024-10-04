<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Distance_controller extends CI_Controller {

//   public function index()
//   {
//     $this->load->database();
//     $this->load->model('Distance_model');

//     if ($this->input->post()) {
//       $latitude = $this->input->post('latitude');
//       $longitude = $this->input->post('longitude');
//       $district = $this->input->post('district');

//       $data['result'] = $this->Distance_model->get_users($latitude, $longitude, $district);
//       $this->load->view('distance_view', $data);
//     } else {
//       $this->load->helper('url'); 
//       $this->load->view('distance_form');
//     }
//   }
public function index()
{
  $this->load->database();
  $this->load->model('Distance_model');

  if ($this->input->post()) {
    $latitude = $this->input->post('latitude');
    $longitude = $this->input->post('longitude');
    $district = $this->input->post('district');

    // Call Distance_model to find nearest locations
    $data['result'] = $this->Distance_model->get_users($latitude, $longitude, $district);

    
    $this->load->view('distance_view', $data);
  } else {
    $this->load->helper('url'); 
    $this->load->view('distance_form');
  }
}

}
