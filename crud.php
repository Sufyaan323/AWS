<!DOCTYPE html>
<html>
<head>

    <title>Create</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="crudStyle.css">
</head>
<body>
    <div class="container">
   <form action="create.php" method="post">

  <h4 class="display-4 text-center">Create</h4><hr><br>
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
           value="<?php if (isset($_GET['email']))
                            echo ($_GET['email']); ?>"
           Placeholder="Enter email">
  </div>

  <button type="submit"
           class="btn btn-primary"
           name="create">Create</button>
        <a href="update.php" class="link-primary">View</a>

        <a href="Main%20page.php" style="text-align: right; class="link-primary">back</a>
</form>
</body>
</html>
