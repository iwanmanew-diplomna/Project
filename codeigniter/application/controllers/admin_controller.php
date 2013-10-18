<?php

class Admin_controller extends CI_Controller {

    function index() {

        //      echo '<pre>';print_r($table['tables']); echo '</pre>';
        $this->load->view('admin_view');
    }

    function get_tables() {
        $this->load->model('tables');
        $table['tables'] = $this->tables->get_tables();
        $this->load->view('admin_view', $table);
    }

    function get_current_table($current_table) {

        $this->load->model('orders');
        $this->load->model('prices');
      $this->load->model('payments');
        $order['r_orders'] = $this->orders->get_ready_orders($current_table);
        $order['prices'] = $this->prices->get_prices_for_current_table($current_table);
        $order['payment'] = $this->payments->get_payments_for_current_table($current_table);
        $this->load->view('admin_view', $order);
    }

    function get_orders() {
        $this->load->model('orders');
        $order['orders'] = $this->orders->get_orders();
        $this->load->view('admin_view', $order);
    }

    function make_order_ready($order_id) {
        $this->load->model('orders');
        $this->orders->make_order_ready($order_id);
        $this->load->view('admin_view');
    }

    function about_info() {
        $this->load->view('admin_view');
    }

}

?>
