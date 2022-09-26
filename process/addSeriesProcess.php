<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
    if(isset($_POST['addSeries'])){ // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $realease = $_POST['realease'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];
        $episode = $_POST['episode'];

        $gen = "";
        foreach($genre as $temp){
            $gen .= $temp."-";
        }

        // Melakukan insert ke databse dengan query dibawah ini
        $query = mysqli_query($con,"INSERT INTO series(name, genre, realease, episode, season, synopsis) VALUES ('$name', '$gen','$realease', '$episode','$season', '$synopsis')") or die(mysqli_error($con)); 
        // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
        if($query){
            echo '<script> alert("Add New Series Success"); window.location = "../page/listSeriesPage.php" </script>';
        }else{
            echo '<script> alert("Add New Series Failed"); </script>';
        }
    }else{
        echo'<script> window.history.back()</script>';
    }
?>