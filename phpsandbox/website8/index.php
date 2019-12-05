<?php
	require('config/config.php');
	require('config/db.php');
	// create query
	$query = 'SELECT * FROM posts ORDER BY created_at DESC';
	// Get the result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	//var_dump($posts);

	// Free Result
	mysqli_free_result($result);
	//close connection
	mysqli_close($conn); 
?>
<?php include('inc/header.php'); ?>
	<div class="container">
	<h1>POSTS</h1>
		<?php foreach($posts as $post): ?>
			<div class="well"> 
				<!-- 'Well' was used in bootstrap 3.0 where as in bootstrap 4.0 well was replaced by 'Cards'. I am using bootstrap 3.0 here -->
				<h3><?php echo $post['title']; ?></h3>
				<small>Created On <?php echo $post['created_at']; ?> by 
					<?php echo $post['author']; ?></small>
				<p><?php echo $post['body']; ?></p>
				<a class="btn btn-default" href="<?php echo ROOT_URL;?>post.php ? id=<?php echo $post['id']; ?>">Read More</a>
			</div>
	    <?php endforeach; ?>
    </div>
<?php include('inc/footer.php'); ?>    
   