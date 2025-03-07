<?php include 'uppdate.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="Crud-style.css">
</head>
<body>
    <div class="container">
   <form action="uppdate.php" method="post">

  <h4 class="display-4 text-center">Update</h4><hr><br>
  <?php if (isset($_GET['error'])) { ?>
  <div class="alert alert-danger" role="alert">
     <?php echo $_GET['error'] ?>
  </div>
  <?php } ?>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="name"
           class="form-control"
           id="name"
           name="name"
           value="<?php if (isset($_GET['name']))
                            echo ($_GET['name']); ?>"
           Placeholder="Enter name">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email"
           class="form-control"
           id="email"
           name="email"
           value="<?=$row['name'] ?>"
           Placeholder="Enter email">
  </div>
  <input type="text"
         name="id"
         value="<?=$row['id']?>"
         hidden >

  <button type="submit"
           class="btn btn-primary"
           name="update">Update</button>
        <a href="crud.php" class="link-primary">View</a>
</form>
</body>
</html>