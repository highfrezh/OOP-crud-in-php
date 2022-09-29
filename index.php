 <?php
    
        // Include database file
        include 'users.php';

        $userObj = new Manager();

        // Delete record from table
        if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
            $deleteId = $_GET['deleteId'];
            $userObj->deleteRecord($deleteId);
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
    </div><br><br> 

    <div class="container">
    <?php
        if (isset($_GET['msg1']) == "insert") {
        echo "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>×</button>
                Your Registration added successfully
                </div>";
        } 
        if (isset($_GET['msg2']) == "update") {
        echo "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>×</button>
                Your Registration updated successfully
                </div>";
        }
        if (isset($_GET['msg3']) == "delete") {
        echo "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>×</button>
                Record deleted successfully
                </div>";
        }
    ?>
    <h2>View Records
        <a href="add.php" style="float:right;"><button class="btn btn-success"><i class="fas fa-plus"></i></button></a>
    </h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <?php 
            $users = $userObj->displayData(); 
            foreach ($users as $user) {
            ?>
            <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td><?php echo $user['address'] ?></td>
            <td>
                <button class="btn btn-primary mr-2"><a href="edit.php?editId=<?php echo $user['id'] ?>">
                <i class="fa fa-pencil text-white" aria-hidden="true"></i></a></button>
                <button class="btn btn-danger"><a href="index.php?deleteId=<?php echo $user['id'] ?>" onclick="confirm('Are you sure want to delete this record')">
                <i class="fa fa-trash text-white" aria-hidden="true"></i>
                </a></button>
            </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>