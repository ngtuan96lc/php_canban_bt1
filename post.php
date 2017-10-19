<?php 
	include_once('app/init.php');
	include_once('views/_header.php');

	if(isset($_GET['post_id'])){
		$id = $_GET['post_id'];
		$post = get_by_id($id);
	} else {
		header('Location: index.php');
	}


?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('public/img/img_post/<?= $post['picture']?>')">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="post-heading">
					<h1><?= $post['title'] ?></h1>
					<h2 class="subheading"><?= $post['sub_title']?></h2>
					<span class="meta">Posted by
					<a href="#"><?= $post['fullname']?></a>
					on <?= $post['created_at']?></span>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- Post Content -->
<article>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<?= $post['body']?>
			</div>
		</div>
	</div>
</article>
<hr>

<?php 
	include_once('views/_footer.php');
?>
