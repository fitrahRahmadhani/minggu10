<?php
    include "myconnection.php";
    $id = $_GET["id"];
    $query = "DELETE FROM student WHERE id=$id";
    if(mysqli_query($connect, $query)){
        header('Location:homeCRUD.php');
    }else{
        echo "Gagal mengubah data <br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>