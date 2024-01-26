<?php include("header.php") ?>
<?php include("connection.php") ?>

  <?php
      $conObj = new connection();
      $projects = $conObj->query("SELECT * FROM `projects`");
  ?>
    
    <div class="p-5 mb-4 bg-body-tertiary rounded-5">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Welcome!</h1>
        <p class="col-md-8 fs-4">This is my private depository <small>(portfolio)</small></p>
        <hr class="my-2">
        <button type="button" class="btn btn-outline-primary">More info</button>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php foreach($projects as $project) { ?>
        <div class="col">
          <div class="card">
            <img width="50" src="images/<?php echo $project['Image']?>" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title"><?php echo $project['Name'] ?></h5>
              <p class="card-text"><?php echo $project['Description'] ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

<?php include("footer.php") ?>