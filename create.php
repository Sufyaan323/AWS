<?php
include 'db_conn.php'; // Ensure this is correctly pointing to your database connection file

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['create'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);

    $user_data = "name=" . urlencode($name) . "&email=" . urlencode($email);

    if (empty($name)) {
        header("Location: Crud.php?error=Name is required&" . $user_data);
        exit();
    } else if (empty($email)) {
        header("Location: Crud.php?error=Email is required&" . $user_data);
        exit();
    } else {
        $sql = "INSERT INTO users(username, email) VALUES('$name', '$email')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: read.php?success=Successfully created");
            exit();
        } else {
            header("Location: Crud.php?error=Something went wrong&" . $user_data);
            exit();
        }
    }
}
?>
