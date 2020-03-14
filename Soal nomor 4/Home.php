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
                   
            <td><a href ="detail.php"><b><font size ="4"><?php echo $data['title']; ?></font></b></a><br>
            	    <font size ="4"><?php echo $data['name']; ?></font><br><br>
            	    <font size ="4"><?php echo $data['content']; ?></font><br></td>   
            <br>
            
        <?php } ?>
    
                </table>
    	    </div>
        </div>
    </div>

	</body>
</html>