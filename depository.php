<?php include("header.php") ?>

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
                        <form action="depository.php" method="post">
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