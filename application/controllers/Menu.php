<?php

class Menu extends CI_Controller{
    
    public function index(){
        $this->load->helper('html');
        $this->load->model('ProductDisplayModel');
        $data['pizza_items']     = $this->ProductDisplayModel->get_pizza_items();
        $data['appetizer_items'] = $this->ProductDisplayModel->get_appetizer_items();
        $data['beverage_items']  = $this->ProductDisplayModel-> get_beverage_items();
        $data['dessert_items']   = $this->ProductDisplayModel-> get_dessert_items() ;
        $data['deal_items']      = $this->ProductDisplayModel-> get_deal_items();

        $this->load->view('component');
        $this->load->view('menu', $data);
   }

}

?>