<?php

            // Include database file
            include 'users.php';

            $userObj = new Manager();

            // Insert Record in user table
            if(isset($_POST['submit'])) {
                $userObj->insertData($_POST);
            }

        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <title>Example of OOP CRUD in PHP Tutorial</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        </head>
        <body>

        <div class="card text-center" style="padding:15px;">
        <h4>Example of OOP CRUD in PHP Tutorial</h4>
        </div><br> 

        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h4>Insert Data</h4>
                        </div>
                        <div class="card-body bg-light">
                        <form action="add.php" method="POST">
                            <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" required="">
                            </div>
                            <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email" required="">
                            </div>
                            <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter Address" required="">
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit">
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </body>
        </html>
