 <?php
    
        // Include database file
        include 'users.php';

        $userObj = new Manager();

        // Edit user record
        if(isset($_GET['editId']) && !empty($_GET['editId'])) {
            $editId = $_GET['editId'];
            $user = $userObj->displyaRecordById($editId);
        }

        // Update Record in user table
        if(isset($_POST['update'])) {
            $userObj->updateRecord($_POST);
        }  
        
    ?>
    
    <!DOCTYPE html>
    
    <html lang="en">
    
    <head>
    
        <title>Example of OOP CRUD in PHP Tutorial
        </title>
    
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    
    </head>
    
    <body>

    
        <div class="card text-center" style="padding:15px;">
    
        <h4>Example of OOP CRUD in PHP Tutorial
        </h4>
    
    </div>
    <br> 

    
    <div class="container">
        
        <div class="row">
            
            <div class="col-md-5 mx-auto">
                
                <div class="card">
                    
                    <div class="card-header bg-primary">
                        
                        <h4 class="text-white">Update Records
                            </h4>
                    
                        </div>
                    
                    <div class="card-body bg-light">
                    
                        <form action="edit.php" method="POST">
                        
                        <div class="form-group">
                        
                            <label for="name">Name:
                            </label>
                        
                        <input type="text" class="form-control" name="uname" value="
                        <?php echo $user['name']; ?>" required="">
                        
                        </div>
                        
                        <div class="form-group">
                        
                            <label for="email">Email
                            </label>
                        
                        <input type="email" class="form-control" name="uemail" value="
                        <?php echo $user['email']; ?>" required="">
                        
                        </div>
                        
                        <div class="form-group">
                        
                            <label for="address">Address:
                            </label>
                        
                        <input type="text" class="form-control" name="uaddress" value="
                        <?php echo $user['address']; ?>" required="">
                        
                        </div>
                        
                        <div class="form-group">
                        
                            <input type="hidden" name="id" value="
                        <?php echo $user['id']; ?>">
                        
                        <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
                        
                        </div>
                    
                        </form>
                    
                    </div>
                    
                    </div>
                
                    </div>
            
                </div>
        
            </div>

    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        </script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
        </script>
    
    </body>
    
    </html>