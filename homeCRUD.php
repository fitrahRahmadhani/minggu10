<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>DATA MAHASISWA</h1>
    <form action="insertForm.html" method="GET">
        <input type="submit" value="Tambahkan Data">
    </form>
    <br>
    <table>
        <tr>
            <th> ID </th>
            <th> Nama </th>
            <th> Gambar </th>
            <th> Alamat </th>
            <th> Aksi </th>
        </tr>
        <?php
            include "myconnection.php";
            $query = "select * from student";
            $result = mysqli_query($connect, $query);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td> <?php echo $row["id"]; ?> </td>
            <td> <?php echo $row["name"]; ?> </td>
            <td> <img src="img/<?php echo $row["image"]; ?>">  </td>
            <td> <?php echo $row["address"]; ?> </td>
            <td>
                <a href="editForm.php?id=<?php echo $row["id"];?>">
                <button>Edit</button></a>
                <a href="delete.php?id=<?php echo $row["id"];?>">
                <button>Hapus</button></a>
            </td>
        </tr>
        <?php
                }
            }
            else{
                echo "0 results";
            }
        ?>
    </table>
</body>
</html>     