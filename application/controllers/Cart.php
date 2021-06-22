<?php

class Cart extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['items'] = array_values(unserialize($this->session->userdata('cart')));
        $data['total'] = $this->total();
        $this->load->view('cart', $data);
    }

    public function getBuyingPizza()
    {

        $hiddenId = $this->input->post("hiddenId");
        $hiddenImg = $this->input->post("hiddenImg");
        $hiddenName = $this->input->post("hiddenName");
        $hiddenDescription = $this->input->post("hiddenDescription");
        $totalHidden = $this->input->post("totalHidden");
        $totalQuantityHidden = $this->input->post("hiddenQuantityTotal");
        $toppingArray = $this->input->post("toppingArray");
        $size = $this->input->post("size");
        $quantity = $this->input->post("quantity");

        $buyingItems = [];
        if ($totalQuantityHidden != 0) {
            $buyingItems = array(
                'hiddenId' => $hiddenId,
                'hiddenImg' => $hiddenImg,
                'hiddenName' => $hiddenName,
                'hiddenDescription' => $hiddenDescription,
                'totalHidden' => $totalQuantityHidden,
                'toppingArray' => $toppingArray,
                'quantity' => $quantity,
                'size' => $size
            );
        } else {
            $buyingItems = array(
                'hiddenId' => $hiddenId,
                'hiddenImg' => $hiddenImg,
                'hiddenName' => $hiddenName,
                'hiddenDescription' => $hiddenDescription,
                'totalHidden' => $totalHidden,
                'toppingArray' => $toppingArray,
                'quantity' => $quantity,
                'size' => $size
            );
        }

        if (!$this->session->has_userdata('cart')) {
            $cart = array($buyingItems);
            $this->session->set_userdata('cart', serialize($cart));
        } else {
            $number = $this->checkPizza($hiddenId, $toppingArray, $size);
            $cart = array_values(unserialize($this->session->userdata('cart')));
            if ($number == -1) {
                array_push($cart, $buyingItems);
                $this->session->set_userdata('cart', serialize($cart));
            } else {
                $cart[$number]['quantity']+= $quantity;
                if ($totalQuantityHidden != 0) {
                    $cart[$number]['totalHidden']+= $totalQuantityHidden;
                } else {
                    $cart[$number]['totalHidden']+= $totalHidden;
                }
                $this->session->set_userdata('cart', serialize($cart));
            }
        }
        redirect('cart');
    }


    public function getBuyingItems()
    {

        $hiddenId = $this->input->post("hiddenId");
        $hiddenImg = $this->input->post("hiddenImg");
        $hiddenName = $this->input->post("hiddenName");
        $hiddenDescription = $this->input->post("hiddenDescription");
        $totalHidden = $this->input->post("totalHidden");
        $totalQuantityHidden = '';
        $toppingArray = '';
        $size = '';
        $quantity = $this->input->post("quantity");



            $buyingItems = array(
                'hiddenId' => $hiddenId,
                'hiddenImg' => $hiddenImg,
                'hiddenName' => $hiddenName,
                'hiddenDescription' => $hiddenDescription,
                'totalHidden' => $totalHidden*$quantity,
                'toppingArray' => $toppingArray,
                'quantity' => $quantity,
                'size' => $size
            );

        if (!$this->session->has_userdata('cart')) {
            $cart = array($buyingItems);
            $this->session->set_userdata('cart', serialize($cart));
        } else {
            $number = $this->checkPizza($hiddenId, $toppingArray, $size);
            $cart = array_values(unserialize($this->session->userdata('cart')));
            if ($number == -1) {
                array_push($cart, $buyingItems);
                $this->session->set_userdata('cart', serialize($cart));
            } else {
                $cart[$number]['quantity']+= $quantity;
                    $cart[$number]['totalHidden']+= $totalQuantityHidden;
                $this->session->set_userdata('cart', serialize($cart));
            }
        }
        redirect('cart');
    }

    public function removeItem($id)
    {
        $number = $this->existsCheck($id);
        $cart = array_values(unserialize($this->session->userdata('cart')));
        unset($cart[$number]);
        $this->session->set_userdata('cart', serialize($cart));
        redirect('cart');
    }

    private function existsCheck($id)
    {
        $cart = array_values(unserialize($this->session->userdata('cart')));
        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]['hiddenId'] == $id) {
                return $i;
            }
        }
        return -1;
    }

    private function checkPizza($id, $toppings, $size)
    {
        $cart = array_values(unserialize($this->session->userdata('cart')));
        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]['hiddenId'] == $id) {
                if ($cart[$i]['size'] == $size) {
                    if ($cart[$i]['toppingArray'] == $toppings) {
                        return $i;
                    }
                }
            }
        }
        return -1;
    }

    private function total() {
        $items = array_values(unserialize($this->session->userdata('cart')));
        $sum = 0;
        foreach ($items as $item) {
            $sum += $item['totalHidden'];
        }
        return $sum;
    }
}
?>