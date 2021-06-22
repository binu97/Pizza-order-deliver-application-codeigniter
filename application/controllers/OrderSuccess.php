<?php

class OrderSuccess extends CI_Controller{
    
    public function index(){
        $data['details'] =  $this->getCustomerDetails();
         $this->load->view('orderSuccess',$data);
   }

   public function getCustomerDetails(){
    $name = $this->input->post("name");
    $email = $this->input->post("email");
    $phone = $this->input->post("phone");
    $address = $this->input->post("address");

    date_default_timezone_set('Asia/Colombo');
    $date = date('d-m-y h:i:s');
    $timestamp = strtotime($date. "+30 minutes") ;
    $time = date('H:i', $timestamp);

    $details = array(
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'address' => $address,
        'deliveryTime' =>$time,
    );
    return $details;
    }

}


?>