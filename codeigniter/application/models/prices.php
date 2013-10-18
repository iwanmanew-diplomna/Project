<?php

class Prices extends CI_Model {

    function get_prices_for_current_table($current_table) {
        $prices = "SELECT SUM(PRICE) FROM ready_orders WHERE table_id = {$current_table}";

        $query = $this->db->query($prices);
        return $query->result_array();
    }


}