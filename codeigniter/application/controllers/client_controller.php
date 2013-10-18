<?php

class Client_controller extends CI_Controller {

   

    function index() {
        $this->load->model('menutype');
        $menu['menutypes'] = $this->menutype->get_menutypes();
        $this->load->view('client_view', $menu);
        
    }
    
    function get_products($product_id) {
        $this->load->model('menutype');
        $product['menutypes'] = $this->menutype->get_menutypes();
        
        $this->load->model('products');
        $product['products'] = $this->products->get_products($product_id);
      //   echo '<pre>';print_r($product['products']); echo '</pre>';
        $this->load->view('client_view', $product);
       
        
    }

      function order($product_id, $table_id=1) {
          //1.1 get ulr
       $this->load->model('order');
       $this->order->order_product($product_id, $table_id);
       
       // or --------- >get $product type from $product_id
        $this->get_products(1);
        //1.2 back to that url
      }
    
      function pay() {
          
      }
}
