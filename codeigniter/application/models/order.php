<?php

class Order extends CI_Model {

    function order_product($product_id, $table_id) {
        $now = date("H:i:s");
        $orders = "INSERT INTO ORDERS(ID, MENULIST_ID, TABLE_ID, ORDERED_AT) VALUES('7', '{$product_id}', '{$table_id}', '{$now}')";
        $query = $this->db->query($orders);
//        return $query->result_array();
    }

    

}