<?php

class Payments extends CI_Model {

    function get_payments_for_current_table($current_table) {
        $payments = "SELECT  p.name AS paymentwayname  
                    FROM tables t,
                    tablestatus s, paymentways p
                    where t.status=s.id and t.paymentway = p.id
                    and t.id = {$current_table}";

        $query = $this->db->query($payments);
        return $query->result_array();
    }


}