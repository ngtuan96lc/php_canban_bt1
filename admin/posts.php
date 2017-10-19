<?php
	include_once('app/init.php');
	include_once('views/_header.php');

	if(isset($_GET['action']) && $_GET['action'] == 'edit') {

		if(!empty($_GET['post_id']) || $_GET['post_id'] == !null){
			$post_id = $_GET['post_id'];
			$post = getById($post_id);
		} else {
			header('Location: posts.php');
		}

		if(isset($_POST['submit']) && !empty($_POST['title']) && !empty($_POST['sub_title']) && !empty($_POST['body'])){
			$title = trim($_POST['title']);
			$sub_title = trim($_POST['sub_title']);
			$body = trim($_POST['body']);
			$radioStatus = trim($_POST['radioStatus']);

			if(editPost( $_GET['post_id'] , $title, $sub_title, $body, $radioStatus)){
				$check_update = true;
			} else{
				$check_update = false;
			}
		}

		include_once('views/_post_edit.php');

	} elseif (isset($_GET['action']) && $_GET['action'] == 'delete') {
		
		$id = $_GET['post_id'];
		if(deletePost($id)){
			header('Location: posts.php');
		} else {
			header('Location: posts.php');
		}

	} elseif (isset($_GET['action']) && $_GET['action'] == 'restore') {
		
		$id = $_GET['post_id'];
		if(restorePost($id)){
			header('Location: posts.php');
		} else {
			header('Location: posts.php');
		}

	} elseif (isset($_GET['action']) && $_GET['action'] == 'add') { 

		include_once('views/_posts_add.php');

		if(isset($_POST['submit']) && !empty($_POST['title']) && !empty($_POST['sub_title']) &&  !empty($_POST['body'])){
			$title = htmlspecialchars(trim($_POST['title']));
			$sub_title = htmlspecialchars(trim($_POST['sub_title']));
			$body = htmlspecialchars(trim($_POST['body']));
			$post_cover = htmlspecialchars(trim($_POST['post_cover']));
			$radioStatus = htmlspecialchars(trim($_POST['radioStatus']));


			// Lấy giá trị author_id
			$username = $_SESSION['username'];
			$author = getAuthor_id($username);

			$picture = basename($_FILES['anh']['name']);
			
			$target = "../public/img/img_post/" . basename($_FILES['anh']['name']);
			$image = $_FILES['anh']['name'];
			
			if (file_exists($target)) {
			    echo "<script> alert('File đã tồn tại.'); </script>";
			    return false;
			}
			$imageFileType = pathinfo($target,PATHINFO_EXTENSION);
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
			    echo "<script> alert('Định dạng file ảnh không được hỗ trợ.');";
			    return false;
			}

			if(addPost($title, $sub_title, $body, $post_cover, $radioStatus, $author, $picture)){
				// Lưu ảnh vào folder

				if(move_uploaded_file($_FILES['anh']['tmp_name'], $target)){
					echo "<script> alert('Upload OK'); </script>";
				} else {
					echo "<script> alert('Upload Not OK'); </script>";
					return false;
				}
				// echo "<script> alert('Adding new Post successful!'); </script>";
			} else{
				echo "<script> alert('Adding new Post wasn't successful!'); </script>";
			}
		} 

	} else {
		// show posts_index
		$posts = getAll();
		include_once('views/_posts_index.php');

	}
?>

<!-- Delete_Post Modal -->
<div class="modal fade" id="deletePostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Select "Delete" to Delete this post !
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" id="deleteAccept" href="">Delete</a>
			</div>
		</div>
	</div>
</div>


<?php
	include_once('views/_footer.php');
?>