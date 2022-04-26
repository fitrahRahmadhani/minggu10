<?php
    include "myconnection.php";
    $id = $_POST["myid"];
    $name = $_POST["myname"];
    $image = upload();
    $address = $_POST["myaddress"];
    $query = "UPDATE student SET name='$name', image='$image', address='$address' WHERE id=$id";
    if(mysqli_query($connect, $query)){
        header('Location:homeCRUD.php');
    }else{
        echo "Gagal mengubah data <br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
    function upload(){
        $nameFile = $_FILES['foto']['name'];
        $tmpName = $_FILES['foto']['tmp_name'];
        move_uploaded_file($tmpName, 'img/' . $nameFile);
        return $nameFile;
    }
?>