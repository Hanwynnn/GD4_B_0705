<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
    if(isset($_POST['addMovie'])){ // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $yearR = $_POST['yearRelease'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];

        // Melakukan insert ke databse dengan query dibawah ini
        $query = mysqli_query($con,"INSERT INTO movies(name, genre, yearRelease, season, synopsis) VALUES ('$name', '$genre','$ueaerR', '$season', '$synopsis')") or die(mysqli_error($con)); 
        // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
        if($query){
            echo '<script> alert("Add New Movie Success"); window.location = "../page/listMoviesPage.php" </script>';
        }else{
            echo '<script> alert("Add New Movie Failed"); </script>';
        }
    }else{
        echo'<script> window.history.back()</script>';
    }
?>