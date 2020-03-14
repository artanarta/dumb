<?php
$koneksi = new mysqli("localhost", "root", "", "dbdumb");
?>

<Link rel ="stylesheet" href="css/bootstrap.css">

<html>

	<body>
	<br>

	&nbsp<font size ="5"><b> &nbsp Dumb Socmed</b> &nbsp </font>

	<a href ="addPost.php"><input type="submit" value="Add Post" class="btn-primary btn-sm"></a>

	<br>

	<?php 
	$sql = $koneksi->query("select * from user_tb inner join posts_tb on user_tb.user_id=posts_tb.createdBy");
	while($data = $sql->fetch_assoc()){
	?>
	<div class="container">
		<div class="row">
			<div class="row">
                <table border="0" width="500">
                   
            <td><b> <font size ="4"><?php echo $data['title']; ?></font></b></a><br>
            	    <font size ="4"><?php echo $data['name']; ?></font><br><br>
            	    
					<a href ="update.php?posts_id=<?php echo $data['posts_id'];?>&user_id=<?php echo $data['user_id'];?>"><input type="submit" value="Update Post" class="btn-primary btn-sm"></a>
					<a href ="delete.php?posts_id=<?php echo $data['posts_id'];?>&user_id=<?php echo $data['user_id'];?>"><input type="submit" value="Delete Post" class="btn-primary btn-sm"></a>
            	</td>   

            <br>
            
        <?php } ?>
    
                </table>
    	    </div>
        </div>
    </div>

	</body>
</html>