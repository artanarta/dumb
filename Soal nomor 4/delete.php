<?php

$koneksi = new mysqli("localhost", "root", "", "dbdumb");

$posts_id = $_GET['posts_id'];

$user_id = $_GET['user_id'];

$delete = mysqli_query($koneksi, "delete from posts_tb where posts_id = '$posts_id'");

if($delete){
	mysqli_query($koneksi, "delete from user_id where user_id = '$user_id'");
}

?>

 <script type="text/javascript"> 
   alert ("Data berhasil dihapus");
   window.location.href="Home.php";
 </script>


