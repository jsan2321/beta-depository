<?php include("header.php") ?>

<!--testing database connection is correct-->
<?php include("connection.php") ?>
<?php
    //print_r($_POST); // get an array of data when submitting form

    if($_POST) { // Validate data from the form submmited

        $name=$_POST['name']; 

        $conObj = new connection(); // get the connection
        
        $sql="INSERT INTO `album`.`projects` (`Name`, `Image`, `Description`) VALUES ('$name', 'image.jpg', 'first project test');"; 

        $conObj->execute($sql); // inserting values into the table

    }
?>

    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!--  form to insert user data-->
                <div class="card">
                    <div class="card-header text-center">
                        Project Data
                    </div>
                    <div class="card-body">
                        <form action="depository.php" method="post" enctype="multipart/form-data"> <!-- enctype attribute added because a file will uploaded via post method through the form -->
                            Project Name: <input class="form-control" type="text" name="name" id="">
                            <br>
                            Project Image: <input class="form-control" type="file" name="file" id="">
                            <br>

                            <input type="submit" value="Send project" class="btn btn-outline-success">
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <!--table to retrieve data from database-->
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Project</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td>1</td>
                            <td>Web App</td>
                            <td>image.jpg</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include("footer.php") ?>