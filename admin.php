<?php
error_reporting(E_ALL);

require("Server_PHP/database.php");
    $statement = $pdo->prepare("SELECT * FROM `begriffe`");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>CURIA Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-fixed/">

    <!-- Bootstrap core CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link href="https://bootswatch.com/4/sketchy/bootstrap.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.3/examples/navbar-fixed/navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">CURIA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Startseite <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Hinzufügen</a>
      </li>
    </ul>
    <form class="form-inline mt-2 mt-md-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
    </form>
  </div>
</nav>

<main role="main" class="container">
    <h1>Admin Page</h1>
    <table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Begriff</th>
      <th scope="col">Definition</th>
      <th scope="col">Kategorie</th>
      <th scope="col">Autor</th>
      <th scope="col"><i class='fa fa-cog'></i></th>
    </tr>
  </thead>
  <tbody>testing
        <?php 
            $statement->execute(); 
            
            //$result = $statement->fetchAll();
            while(($result = $statement->fetch(PDO::FETCH_ASSOC)) !== false):
            ?>
            <tr>
                <td><?php echo $result["id"]?></td>
                <td><?php echo $result["begriff"]?></td>
                <td><?php echo $result["definition"]?></td>
                <td><?php echo $result["kategorie"]?></td>
                <td><?php echo $result["autor"]?></td>
                <td><button type="button" class="btn btn-danger btn-sm " data_but="btn-xs" data-toggle="modal" data-target="#modal_<?php echo $result["id"]?>"><i class='fa fa-wrench'></i> edit</button></td>
            </tr>
            <?php endwhile ?>

            </tbody>
</table>
</main>

<?php 
            $statement->execute(); 
            
            while(($result = $statement->fetch(PDO::FETCH_ASSOC)) !== false):
            ?>
                
<!-- The Modal -->
<div class="modal" id="modal_<?php echo $result["id"]?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Editier <?php echo $result["begriff"]?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        kommt bald....
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
            <?php endwhile ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
