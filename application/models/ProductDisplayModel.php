<?php
    class ProductDisplayModel extends CI_Model{
        public function __construct()
        {
            $this -> load -> database();
        }
   
    public function get_pizza_items() {
        $this->db->select('pd.*,so.price,so.size_option_name');
        $this->db->from('product_display pd, size_option so,Category ct');
        $this->db->where('pd.id = so.id');
        $this->db->where('so.size_option_name = "Personal"');
        $this->db->where('pd.catId = ct.catId');
        $this->db->where('ct.catName = "Pizza"');
        $tableData = $this->db->get();
        if ($tableData->num_rows() > 0) {
            return $tableData->result();
        } else {
            return null;
        }
    }
    
    public function get_appetizer_items() {
        $this->db->select('productName, productPrice,productImage, description,id');
        $this->db->from('product_display pd, Category ct');
        $this->db->where('pd.catId = ct.catId');
        $this->db->where('ct.catName = "Appetizer"');
        $tableData = $this->db->get();
        if ($tableData->num_rows() > 0) {
            return $tableData->result();
        } else {
            return null;
        }
    }
    
    public function get_beverage_items() {
        $this->db->select('productName, productPrice,productImage, description,id');
        $this->db->from('product_display pd, Category ct');
        $this->db->where('pd.catId = ct.catId');
        $this->db->where('ct.catName = "Beverage"');
        $tableData = $this->db->get();
        if ($tableData->num_rows() > 0) {
            return $tableData->result();
        } else {
            return null;
        }
    }
    
    public function get_dessert_items() {
        $this->db->select('productName, productPrice,productImage, description,id');
        $this->db->from('product_display pd, Category ct');
        $this->db->where('pd.catId = ct.catId');
        $this->db->where('ct.catName = "Dessert"');
        $tableData = $this->db->get();
        if ($tableData->num_rows() > 0) {
            return $tableData->result();
        } else {
            return null;
        }
    }

    public function get_deal_items() {
        $this->db->select('productName, productPrice,productImage, description,id');
        $this->db->from('product_display pd, Category ct');
        $this->db->where('pd.catId = ct.catId');
        $this->db->where('ct.catName = "Deal"');
        $tableData = $this->db->get();
        if ($tableData->num_rows() > 0) {
            return $tableData->result();
        } else {
            return null;
        }
    }

    public function getSelected($id){ 
            $this->db->select('productName, productPrice,productImage, description,id');
            $this->db->from('product_display pd, Category ct');
            $this->db->where('ct.catName = "Pizza"');
            $this->db->where('pd.id',$id);
            
            
            $tableData = $this->db->get();
                if ($tableData->num_rows() > 0) {
            return $tableData->result();
             } else {
            return null;
            }
    }

    public function getSelectedSize($id){ 
        $this->db->select('option_id , size_option_name ,price,id');
        $this->db->like('id',$id);
        $tableData = $this->db->get('size_option');
            if ($tableData->num_rows() > 0) {
        return $tableData->result();
         } else {
        return null;
        }
    }


    public function getSelectedPrice($size,$id){ 
        $this->db->select('price, size_option_name');
        $this->db->where('size_option_name',$size);
        $this->db->where('id',$id);
        $tableData = $this->db->get('size_option');
            if ($tableData->num_rows() > 0) {
        return $tableData->result();
         } else {
        return null;
        }
    }

    public function getTopping($id){ 
        $this->db->select('toppingId , toppingName ,toppingPrice ,toppingImage,id');
        $this->db->like('id',$id);
        $tableData = $this->db->get('toppings');
            if ($tableData->num_rows() > 0) {
                return $tableData->result();
            } else {
                return null;
            }
    }

    public function getSelectedToppingPrice($topping,$id){ 
        $this->db->select('toppingPrice, toppingName');
        $this->db->where('toppingName',$topping);
        $this->db->where('id',$id);
        $tableData = $this->db->get('toppings');
            if ($tableData->num_rows() > 0) {
        return $tableData->result();
         } else {
        return null;
        }
    }


}
?>        