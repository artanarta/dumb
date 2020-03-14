<?php
  $koneksi = new mysqli("localhost", "root", "", "dbdumb");
?>

<Link rel ="stylesheet" href="css/bootstrap.css">

<section class="contact" id="contact">
  
    <div class="container">
      <br>
      <div class="row">
        <div class="col-sm-12 text-center">
        <h2>Post</h2>
        <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
            <div class="form-group">
               <label >ID Creator</label>
               <input type="text" class="form-control" name="user_id" placeholder="Masukkan ID Kreator">
            </div>
            <div class="form-group">
               <label >Nama</label>
               <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Kreator">
            </div>
           <label for="nama">ID Post</label>
               <input type="text" class="form-control" name="posts_id" placeholder="Masukkan ID Post">
            </div>
            <div class="form-group">
               <label >Title</label>
               <input type="text" class="form-control" name="title" placeholder="Masukkan Judul Artikel">
            </div>
            <div class="form-group">
               <label >Content </label>
               <input type="text" class="form-control" name="content" placeholder="Masukkan Konten Artikel">
            </div>
            
            
            
        <input type="submit" name= "simpan" value="Simpan" class="btn btn-primary">
 
        </form>
        </div>
      </div>
    </div>
  </section>


  <?php
  $koneksi = new mysqli("localhost", "root", "", "dbdumb");  

   if(isset($_POST['simpan'])){
      $user_id = $_POST['user_id'];
      $name = $_POST['name'];
      $posts_id = $_POST['posts_id'];
      $title = $_POST['title'];
      $content = $_POST['content'];
      $createdBy = $_POST['user_id'];

      $insertUser = mysqli_query($koneksi, "INSERT INTO user_tb SET user_id='$user_id',name='$name'");
    
     if($insertUser){
        
        $insertPosts = mysqli_query($koneksi, "INSERT INTO posts_tb SET posts_id='$posts_id',title='$title',content='$content',createdBy='$createdBy'");
      ?>

        <?php
     }

     if($insertPosts){
        ?>
        <script type="text/javascript">
         alert ("Data berhasil disimpan");
         window.location.href="Home.php";
      </script>
        <?php
     }
}

?>
