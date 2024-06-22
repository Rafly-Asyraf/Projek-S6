<?php
class Order_model extends CI_Model {


    public function saveOrder($data = null) {
        $this->db->insert('orderan', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

}
