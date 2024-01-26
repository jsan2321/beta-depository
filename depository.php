<?php include("header.php") ?>

<!--testing database connection is correct-->
<?php include("connection.php") ?>
<?php
    //print_r($_POST); // get an array of data when submitting form

    if($_POST) { // Validate data from the form submmited
        $name=$_POST['name']; 
        $description=$_POST['description']; 

        $date = new DateTime();

        $image=$date->getTimestamp()."_".$_FILES['file']['name']; // date function which allows file names to be different 
        $tempImage = $_FILES['file']['tmp_name']; // retrieves the temporary filename of the uploaded file
        move_uploaded_file($tempImage,"images" . DIRECTORY_SEPARATOR . $image); // moves the uploaded file to the destination paht; directory and desired filename for the uploaded file
        
        $conObj = new connection(); // get the connection
        $sql="INSERT INTO `album`.`projects` (`Name`, `Image`, `Description`) VALUES ('$name', '$image', '$description')"; 
        $conObj->execute($sql); // inserting values into the table

        header("location:depository.php"); // after submitting
    }

    if($_GET) {
        $id=$_GET['delete'];
        $conObj = new connection();

        $image = $conObj->query("SELECT `Image` FROM `projects` WHERE id=$id");
        unlink("images/".$image[0]['Image']); // delete images from 'images' folder
        //print_r($image[0]['Image']);

        $sql = "DELETE FROM `projects` WHERE `projects`.`id`=$id";
        //$sql = "DELETE FROM `album`.`projects` WHERE (`Id` = $id)";
        $conObj->execute($sql);

        header("location:depository.php"); // after deleting
    }

    $conObj = new connection();
    $projects = $conObj->query("SELECT * FROM `projects`");

    //print_r($result);
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
                            Project Name: <input required class="form-control" type="text" name="name" id="">
                            <br>
                            Project Image: <input required class="form-control" type="file" name="file" id="">
                            <br>
                            <textarea required class="form-control" name="description" cols="30" rows="10"></textarea>
                            <br>
                            <input type="submit" value="Send project" class="btn btn-success">
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
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php foreach($projects as $project) { ?>
                        <tr>
                            <td><?php echo $project['Id'] ?></td>
                            <td><?php echo $project['Name'] ?></td>
                            <td>
                                <img width="100" src="images/<?php echo $project['Image']?>" alt="" srcset="">
                            </td>
                            <td><?php echo $project['Description'] ?></td>
                            <td><a class="btn btn-danger" href="?delete=<?php echo $project['Id']?>">Delete</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include("footer.php") ?>