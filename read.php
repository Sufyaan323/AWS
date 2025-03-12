<?php 
include "db_conn.php"; // Include database connection

// Fetch users from database
$sql = "SELECT id, username, email FROM users"; // Change 'username' to 'name' if renamed
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Read</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="crudStyle.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <h4 class="display-4 text-center">Read</h4><br>

            <?php if (isset($_GET['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?= htmlspecialchars($_GET['success']); ?>
                </div>
            <?php } ?>

            <?php if (mysqli_num_rows($result) > 0) { ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($rows = mysqli_fetch_assoc($result)) {
                            $i++;
                        ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= htmlspecialchars($rows['username']); ?></td> <!-- Changed 'name' to 'username' -->
                            <td><?= htmlspecialchars($rows['email']); ?></td>
                            <td>
                                <a href="update.php?id=<?= $rows['id'] ?>" class="btn btn-success">Update</a>
                                <a href="delete.php?id=<?= $rows['id'] ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } else { ?>
                <p class="text-center">No records found.</p>
            <?php } ?>
        </div>
        <div class="link-right">
            <a href="create.php" class="link-primary">Create</a>
        </div>
    </div>
</body>
</html>
