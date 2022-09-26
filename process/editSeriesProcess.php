<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
    if(isset($_POST['editSeries'])){ // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $genre = $_POST['genre'];
        $nama = $_POST['name'];
        $realease = $_POST['realease'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];

        $gen = "";
        foreach($genre as $temp){
            $gen .= $temp."-";
        }

        $queryEdit = mysqli_query($con, "UPDATE series SET name='$nama', genre='$gen', realease='$realease', episode='$episode', season='$season', synopsis='$synopsis' WHERE id = ".$_GET['id']) or die(mysqli_error($con));

        if($queryEdit){
            echo '<script> alert("Edit Data Success"); window.location = "../page/listSeriesPage.php" </script>';
        }else{
            echo '<script> alert("Edit Data Failed"); </script>';
        }
    }else{
        echo'<script> window.history.back()</script>';
    }
?>