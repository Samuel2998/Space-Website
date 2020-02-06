<?php include("../ctrl_projects.php"); ?>

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
  <body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
      <a class="navbar-brand" href="http://localhost/space/admin">SPACE (Admin)</a>
    </nav>
    <div class="container-fluid projDiv adminProjDiv" id="projDiv">
      <div class="row">
        <h2 class="title">Projects (Admin)</h2>
      </div>
      <a class="btn btn-info" href="addprojs.php">Add Project</a>
      <div class="imagesDiv">
        <?php

        $controller = new ctrl_projects();
        $stm = $controller->getProjects();

        // to fetch data

        $stm->bind_result($id, $name, $photo);
        while($stm->fetch()){
        ?>
        
        <div class="col-sm-4 imgDiv">
          <img src="../images/projects/<?php echo $photo; ?>" class="rounded">
          <div class="adminImg">
            <a class="btn btn-success" href="project.php?id=<?php echo $id; ?>"><?php echo $name; ?></a>
          </div>
          <a class="btn btn-warning" href="editprojs.php?id=<?php echo $id; ?>">Edit</a>
          <a class="btn btn-danger" href="delprojs.php?id=<?php echo $id; ?>">Delete</a>
        </div><br>

        <?php } ?>
      </div>
    </div>
    <div class="footerr">
      <p>Powered by Droplet</p>
    </div>
  </body>
</html>
