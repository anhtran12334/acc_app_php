<?php
    class User {
        public $fullName;
        public $userName;
        public $email;
        public $phone;
        public $address;
        public $role;

        function __construct($fullName, $userName, $email, $phone, $address, $role){
            $this->$fullName = $fullName;
            $this->$userName = $userName;
            $this->$email = $email;
            $this->$phone = $phone;
            $this->$address = $address;
            $this->$role = $role;
        }
    }
?>