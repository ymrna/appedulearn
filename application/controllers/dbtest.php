<?php
class DbTest extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the database library
        $this->load->database();
    }

    public function index() {
        // Test if the database is connected
        if ($this->db->conn_id) {
            echo "Database connection is successful!";
            
            // Test a simple query
            $query = $this->db->query("SELECT * FROM admin LIMIT 1");
            if ($query->num_rows() > 0) {
                echo "<br>Query successful!";
            } else {
                echo "<br>Query failed or table is empty!";
            }
        } else {
            echo "Database connection failed!";
        }
    }
}
