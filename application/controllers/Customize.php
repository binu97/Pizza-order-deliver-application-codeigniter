<?php

class Customize extends CI_Controller{
    
    public function index(){

        $this->load->view('customize');
   }
   
   function getId() {
    $id = $this-> input->post('id');
    $this->load->model('ProductDisplayModel'); 
    $data['pizza_items'] = $this->ProductDisplayModel->getSelected($id);
    $data['size_pizza_items'] = $this->ProductDisplayModel->getSelectedSize($id);
    $data['toppings'] = $this->ProductDisplayModel->getTopping($id);
    $this -> load -> view('customize', $data);
    
  }
  function getPrice() {
    $size = $this->input->post('size',TRUE);
    $id = $this-> input->post('id');
		$this->load->model('ProductDisplayModel');
		$data = $this->ProductDisplayModel->getSelectedPrice($size,$id);
		echo json_encode($data);
    
  }

  function getToppingsPrice() {
    $topping = $this->input->post('topping',TRUE);
    $id = $this-> input->post('id');
		$this->load->model('ProductDisplayModel');
		$data = $this->ProductDisplayModel->getSelectedToppingPrice($topping,$id);
		echo json_encode($data);
    
  }
}

?>