<?php

class Products extends CI_Model {

    function get_products($product_id) {
        $products = "SELECT l.id AS PRODUCTID,l.name AS PRODUCTNAME,
    t.name AS TYPENAME, t.id AS TYPEID,l.description,l.price,l.quantity FROM menulist l,
    menutypes t
    where l.type=t.id and t.id={$product_id}";


        $query = $this->db->query($products);
        return $query->result_array();
    }

}