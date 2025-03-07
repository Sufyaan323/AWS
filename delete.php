<?php
if(isset($_GET['id'])){
include "db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_GET['id']);

    $sql = "DELETE FROM users
            WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: read.php?success=successfully deleted");
    }else {
        header("location: Crud.php?error=Email is required&user_data");
    }
}else{
    header("location: read.php");
}