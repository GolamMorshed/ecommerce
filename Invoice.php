<?php
    class Invoice {
        public $conn;
        private $db_table = "Invoice";
        public $InvoiceID;
        public $DocDateTime;
        public $InvAddress1;

        public function __construct($db){
            $this->conn = $db;
        }

        public function db_connection() {
            $this->conn = $db;
        }

        public function getAllInvoiceInformation() {
            $sqlQuery = "SELECT InvoiceID, DocDateTime, InvAddress1 FROM "
            . $this->db_table."";

            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->execute();

            return $stmt;
        }
    }
?>
