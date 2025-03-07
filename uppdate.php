<?php

if (isset($_GET['id'])) {
    include "db_conn.php";

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_GET['id']);

    $sql = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) >0) {
        $row = mysqli_fetch_assoc($result);
    }else {
        header("Location: read.php");
    }

}else if(isset($_POST['update'])){
    include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $id = validate($_POST['id']);

    $user_data = "name=".$name. '&email='.$email;

    if (empty($name)) {
        header("location: uupdate.php?id=$id&error=Name is required")
        ;
    }else if (empty($email)){
        header("location: uupdate.php?id=$id&error=Email is required")
        ;
    }else {

        $sql = "UPDATE users
                SET name='$name', email='$email'
                WHERE id=$id;
                VALUES('$name, $email')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("location: read.php?success=successfully created");
            }else {
                header("location: Crud.php?error=Email is required&user_data");
            }
    }
}else {
    header("location: read.php");
}