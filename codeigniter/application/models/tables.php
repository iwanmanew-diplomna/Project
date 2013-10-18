<?php

class Tables extends CI_Model {

    function get_tables() {
        $tables = "SELECT t.id as TABLEID, t.name AS NAME,s.status,t.paymentway as paymentid,p.name as paymentname from TABLES t, TABLESTATUS s, paymentways p
                    WHERE t.id=s.id
                    and t.paymentway=p.id";


        $query = $this->db->query($tables);
        return $query->result_array();
    }

    function get_current_table($current_table) {
         $current_order = "SELECT t.id as TABLEID, t.name AS NAME,s.status,t.paymentway as paymentid,p.name as paymentname from TABLES t, TABLESTATUS s, paymentways p
                    WHERE t.id=s.id
                    and t.paymentway=p.id
                    and t.id={$current_table}";


        $query = $this->db->query($current_order);
        return $query->result_array();
    }
}