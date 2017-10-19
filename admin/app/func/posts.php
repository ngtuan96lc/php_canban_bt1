<?php
	// Get all data
	function getAll(){
		global $conn;
		$posts = array();

		$sql = "SELECT posts.id, posts.title, users.fullname, posts.status, posts.picture FROM posts INNER JOIN users ON posts.author_id = users.id";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				$posts[] = $row;
			}
		}
		return $posts;
	}

	// Get post by id
	function getById($post_id){
		global $conn;
		$post = array();
		$sql = "SELECT * FROM posts WHERE id = {$post_id}";

		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				$post = $row;
			}
		}
		return $post;
	}

	function getAuthor_id($username){
		global $conn;
		$author = array();
		$sql = "SELECT * FROM users WHERE username = '{$username}'";

		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				$author = $row;
			}
		}
		return $author['id'];
	}

	function editPost($id, $title, $sub_title, $body, $status){
		global $conn;
		
		$title = mysqli_real_escape_string($conn, $title);
		$sub_title = mysqli_real_escape_string($conn, $sub_title);
		$body = mysqli_real_escape_string($conn, $body);
		$status = mysqli_real_escape_string($conn, $status);

		$sql = "UPDATE posts SET title='{$title}' , sub_title='{$sub_title}', body='{$body}', status='{$status}' WHERE id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		} else {
			echo mysqli_error($conn);
		}
	}

	function deletePost($id){
		global $conn;
		$sql = "UPDATE posts SET status = 2 WHERE id = {$id}";
		if(mysqli_query($conn, $sql))
			return true;
		else {
			// echo "Code id dont match: ".mysqli_error($conn);
			return false;
		}
	}

	function restorePost($id){
		global $conn;
		$sql = "UPDATE posts SET status = 1 WHERE id = {$id}";
		if(mysqli_query($conn, $sql))
			return true;
		else {
			// echo "Code id dont match: ".mysqli_error($conn);
			return false;
		}
	}

	function addPost($title, $sub_title, $body, $post_cover, $radioStatus, $author_id, $picture){
		global $conn;

		$title = mysqli_real_escape_string($conn, $title);
		$sub_title = mysqli_real_escape_string($conn, $sub_title);
		$body = mysqli_real_escape_string($conn, $body);
		$post_cover = mysqli_real_escape_string($conn, $post_cover);
		$status = mysqli_real_escape_string($conn, $radioStatus);
		$author_id = mysqli_real_escape_string($conn, $author_id);
		$picture = mysqli_real_escape_string($conn, $picture);

		// Thực hiện câu lệnh T_SQL
		$sql = "INSERT INTO posts(posts.title, posts.sub_title, posts.body, posts.post_cover, posts.status, posts.author_id, posts.picture) VALUES('{$title}', '{$sub_title}', '{$body}', '{$post_cover}', {$status}, {$author_id}, '{$picture}')";
		if(mysqli_query($conn, $sql))
			return true;
		else 
			return false;
	}


?>