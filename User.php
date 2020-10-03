<?php
    class Users{
        // connection
        $conn;

        //table
        private $db_table = "User";

        //collumns
        public $MemeberNo;
        public $Name;
        public $Password;
        public $UserType;
        public $Adress1;
        public $Adress2;
        public $Adress3;
        public $Adress4;
        public $PostCode;
        public $Race;
        public $Gender;
        public $DOB;
        public $PhoneNo;
        public $DirectPhoneNo;
        public $Email;
        public $Photo;
        public $Note;
        public $CreatedDateTime;

        //database connection
        public function db_connection(){
            $this->conn = $db;
        }

        //create user
        public function createUser() {

        }

        //get all users information
        public function getUserInformation() {
            $sqlQuery = "SELECT MemberNo, Name, Password, UserType,
            Address1, Address2, Address3, Address4, PostCode, Race,
            Gender, DOB, PhoneNo, DirectPhoneNo, Email, Photo, Note,
            CreatedDateTime created FROM " . $this->db_table . "";

            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->execute();

            return $stmt;
        }

        //update specific users
        public function updateSingleUser() {
            $sqlQuery = "SELECT Name created FROM ". $this->db_table. "";

            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->execute();

            return $stmt;

        }

        // read a single users
        public function readSingleUser() {
            $sqlQuery = "SELECT MemberNo, Name, Password, UserType,
            Address1, Address2, Address3, Address4, PostCode, Race,
            Gender, DOB, PhoneNo, DirectPhoneNo, Email, Photo, Note,
            CreatedDateTime created FROM " .$this->db_table.
            " WHERE MemeberNo = ? ";

            $stmt->execute();

            return $stmt;
        }

        //delete a user
        public function deleteUser() {
            $sqlQuery = "DELETE FROM " . $this->db_table .
            " WHERE MemberNo = ?";

            $stmt = $this->conn->prepare($sqlQuery);

            $this->MemeberNo=htmlspecialchars(strip_tags($this->MemeberNo));

            $stmt->bindParam(1, $this->MemeberNo);

            if($stmt->execute()){
                return true;
            }
            return false;

        }



    }


?>
