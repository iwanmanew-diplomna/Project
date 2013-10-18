<?php

class Orders extends CI_Model {

    function get_orders() {
        $orders = " SELECT o.id AS ORDERID, o.menulist_id as PRODUCTID,m.name as PRODUCTNAME , o.table_id as TABLEID, t.name as TABLENAME, o.ORDERED_AT as ORDERED_AT
                    FROM orders o, menulist m, tables t
                    WHERE o.menulist_id = m.id
                    AND o.table_id = t.id
                    ORDER BY t.name, o.ordered_at";

        $query = $this->db->query($orders);
        return $query->result_array();
    }

    function get_ready_orders($current_table) {
        $orders = " SELECT o.id AS ORDERID, o.menulist_id as PRODUCTID,m.name as PRODUCTNAME , o.table_id as TABLEID, t.name as TABLENAME, o.ORDERED_AT as ORDERED_AT, o.PRICE
                    FROM ready_orders o, menulist m, tables t
                    WHERE o.menulist_id = m.id
                    AND o.table_id = t.id
                    AND o.table_id = {$current_table}
                    ORDER BY t.name, o.ordered_at";

        $query = $this->db->query($orders);
        return $query->result_array();
    }

    function make_order_ready($order_id) {
        $ready_orders = "INSERT INTO READY_ORDERS (ID, MENULIST_ID, ORDERED_AT, TABLE_ID, PRICE)
                    SELECT o.ID, o.MENULIST_ID, o.ORDERED_AT, o.TABLE_ID, m.price
                    FROM ORDERS o, menulist m
                    WHERE m.id = o.menulist_id 
                    AND o.id = {$order_id} ";


// select from orders, insert in ready orders, delete from table orders, get prices??? 
        $query = $this->db->query($ready_orders);
        $this->delete_order($order_id);
    }

    function delete_order($order_id) {
        $delete_order = "DELETE  ORDERS 
                         WHERE id = {$order_id} ";
        $query = $this->db->query($delete_order);
    }

}