<?php

        class Manager
        {
            private $servername = "localhost";
            private $username   = "root";
            private $password   = "";
            private $database   = "php_crud";
            public  $con;


            // Database Connection 
            public function __construct()
            {
                $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
                if(mysqli_connect_error()) {
                trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
                }else{
                return $this->con;
                }
            }

            // Insert user data into user table
            public function insertData($post)
            {
                $name = $this->con->real_escape_string($_POST['name']);
                $email = $this->con->real_escape_string($_POST['email']);
                $address = $this->con->real_escape_string($_POST['address']);
                $query="INSERT INTO users(name,email,address) VALUES('$name','$email','$address')";
                $sql = $this->con->query($query);
                if ($sql==true) {
                    header("Location:index.php?msg1=insert");
                }else{
                    echo "Registration failed try again!";
                }
            }

            // Fetch user records for show listing
            public function displayData()
            {
                $query = "SELECT * FROM users";
                $result = $this->con->query($query);
            if ($result->num_rows > 0) {
                $data = array();
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                return $data;
                }else{
                echo "No found records";
                }
            }

            // Fetch single data for edit from user table
            public function displyaRecordById($id)
            {
                $query = "SELECT * FROM users WHERE id = '$id'";
                $result = $this->con->query($query);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row;
                }else{
                echo "Record not found";
                }
            }

            // Update user data into user table
            public function updateRecord($postData)
            {
                $name = $this->con->real_escape_string($_POST['uname']);
                $email = $this->con->real_escape_string($_POST['uemail']);
                $address = $this->con->real_escape_string($_POST['uaddress']);
                $id = $this->con->real_escape_string($_POST['id']);
            if (!empty($id) && !empty($postData)) {
                $query = "UPDATE users SET name = '$name', email = '$email', address = '$address' WHERE id = '$id'";
                $sql = $this->con->query($query);
                if ($sql==true) {
                    header("Location:index.php?msg2=update");
                }else{
                    echo "Registration updated failed try again!";
                }
                }
                
            }

            // Delete user data from user table
            public function deleteRecord($id)
            {
                $query = "DELETE FROM users WHERE id = '$id'";
                $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:index.php?msg3=delete");
            }else{
                echo "Record does not delete try again";
                }
            }
        }
    ?>