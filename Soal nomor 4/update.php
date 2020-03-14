<?php
  $koneksi = new mysqli("localhost", "root", "", "dbdumb");

  $posts_id = $_GET['posts_id'];
  $user_id = $_GET['user_id'];

  $sql = mysqli_query($koneksi, "select * from user_tb, posts_tb where user_tb.user_id = '$user_id and posts_tb.posts_id = '$posts_id'");

  while($data = mysqli_fetch_array($sql)){

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
               <input type="text" class="form-control" name="user_id" value="<?php echo $data['user_id'] ?>">
            </div>
            <div class="form-group">
               <label >Nama</label>
               <input type="text" class="form-control" name="name" value="<?php echo $data['name'] ?>">
            </div>
           <label for="nama">ID Post</label>
               <input type="text" class="form-control" name="posts_id" value="<?php echo $data['posts_id'] ?>">
            </div>
            <div class="form-group">
               <label >Title</label>
               <input type="text" class="form-control" name="title" value="<?php echo $data['title'] ?>">
            </div>
            <div class="form-group">
               <label >Content </label>
               <input type="text" class="form-control" name="content" value="<?php echo $data['content'] ?>">
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
      
      $sql = $koneksi->query("SELECT * FROM  posts_tb WHERE posts_id= $posts_id");
      $sql = $koneksi->query("SELECT * FROM  user_id WHERE user_id= $user_id");
    
      $sql = mysqli_query($koneksi, "UPDATE user_tb SET user_id='$user_id',name='$name'");
    
     if($sql){
        
        $sql = mysqli_query($koneksi, "UPDATE  posts_tb SET posts_id='$posts_id',title='$title',content='$content',createdBy='$createdBy'");
      ?>

        <?php
     }

          if ($sql){
            ?>
                <script type="text/javascript">
                    alert ("Data berhasil diubah");
                    window.location.href="home.php";
                </script>
            <?php
      
    }
  }
}

?>