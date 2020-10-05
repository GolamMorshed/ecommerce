<?php
    class Invoice {
        //connection
        public $conn;

        //table name
        private $db_table = "Invoice";


        public $InvoiceID;
        public $DocDateTime;
        public $InvAddress1;


        //constructor
        public function __construct($db){
            $this->conn = $db;
        }


        //database connection
        public function db_connection() {
            $this->conn = $db;
        }

        //get all invoice information
        public function getAllInvoiceInformation() {
            $sqlQuery = "SELECT InvoiceID, DocDateTime, InvAddress1 FROM "
            . $this->db_table."";

            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->execute();

            return $stmt;
        }
    }
?>
