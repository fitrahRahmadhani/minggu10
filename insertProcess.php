<?php
    include "myconnection.php";
    $name = $_POST['myname'];
    $image = upload();
    $address = $_POST['myaddress'];
    $query = "INSERT INTO student(name, image, address) value
                ('$name', '$image', '$address')";
    if(mysqli_query($connect, $query)){
        echo "Data baru berhasil dibuat";
        header('Location:homeCRUD.php');
    }else{
        echo "Data baru gagal dibuat<br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
    function upload(){
        $nameFile = $_FILES['foto']['name'];
        $tmpName = $_FILES['foto']['tmp_name'];
        move_uploaded_file($tmpName, 'img/' . $nameFile);
        return $nameFile;
    }
?>