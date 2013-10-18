<?php

class Menutype extends CI_Model {

    function get_menutypes() {
        $menutypes = "SELECT id,name from menutypes";
        $query = $this->db->query($menutypes);
        return $query->result_array();
    }

}

