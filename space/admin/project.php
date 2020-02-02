<?php include("../ctrl_project.php");
  
  $id = $_GET['id'];
  $projID = $id;

  $controller = new ctrl_project();
  $stm = $controller->getProjectItems($id);

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SPACE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <body style="background: black;">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
      <a class="navbar-brand" href="http://localhost/space/admin">SPACE (Admin)</a>
    </nav>
    <div class="container projDiv" id="projDiv">
      <div class="row">
        <h2 class="title">Projects (Admin)</h2>
      </div>
      <a class="btn btn-success" href="addoneproj.php?id=<?php echo $id ?>">Add Project</a>
      <?php

      $stm->bind_result($id, $title, $text, $photo);

      while($stm->fetch()){
      ?>

      <div class="row imagesDiv">
        <div class="col-sm-8">
          <br><br>
          <h2 style="color: white;"><?php echo $title ?></h2>
          <p style="margin-top: 20px; color: white;">
            <?php echo $text; ?>
          </p>
          <a class="btn btn-primary" href="editoneproj.php?id=<?php echo $id; ?>&projID=<?php echo $projID; ?>">Edit</a>
          <a class="btn btn-danger" href="deloneproj.php?id=<?php echo $id; ?>&projID=<?php echo $projID; ?>">Delete</a>
        </div><br><br>
        <div class="col-sm-4 imgDiv">
          <img src="../images/proj_photos/<?php echo $photo ?>" class="rounded">
        </div>
      </div>

      <?php } ?>
    </div>
    <div class="footerr">
      <p>Powered by Droplet</p>
    </div>
  </body>
</html>
