<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
    if(isset($_POST['edit'])){ // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $email = $_POST['email'];
        $nama = $_POST['name'];
        $phonenum = $_POST['phonenum'];
        $job = $_POST['job'];

        session_start();
        $id = $_SESSION['user']['id'];

        $queryEdit = mysqli_query($con, "UPDATE users SET name='$nama', email='$email', phonenum='$phonenum', job='$job' WHERE id = '$id'") or die(mysqli_error($con));

        if($queryEdit){
            echo '<script> alert("Edit Data Success"); window.location = "../page/showProfile.php" </script>';
        }else{
            echo '<script> alert("Edit Data Failed"); </script>';
        }
    }else{
        echo'<script> window.history.back()</script>';
    }
?>