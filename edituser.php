<?php
      require 'Dbconnection.php';
      $id = $_GET["id"];
      $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM php WHERE id = $id"));
      ?>
    <?php require 'script.php'; ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <form autocomplete="off" action="" method="post">
    <div class="mb-3">
    <input type="hidden" id="id" value="<?php echo $rows['id']; ?>">
  </div>


    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" class="form-control" id="name" value="<?php echo $rows['name']; ?>" aria-describedby="emailHelp">
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">lname</label>
    <input type="text" class="form-control" id="lname" value="<?php echo $rows['lname']; ?>" aria-describedby="emailHelp">
  </div>
 

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" value="<?php echo $rows['email']; ?>" aria-describedby="emailHelp">
  </div>
 
 
  <button type="button" class="btn btn-primary" onclick="submitData('insert');">Edit</button>
</form>
     

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

  </body>
</html>
