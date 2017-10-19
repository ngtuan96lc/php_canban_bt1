<form action="" method="POST"> 
	<!-- <legend>Edit a post</legend> -->
	<div class="form-group">
		<label for="inputTitle">Title</label>
		<input type="text" class="form-control" id="inputTitle" name="title" value="<?= isset($_POST['title']) ? $_POST['title'] : $post['title']?>" placeholder="Enter Title">
	</div>
	<div class="form-group">
		<label for="inputSubTitle">Sub Title</label>
		<input type="text" class="form-control" id="inputSubTitle" name="sub_title" value="<?= isset($_POST['sub_title']) ? $_POST['sub_title'] : $post['sub_title']?>" placeholder="Enter Sub Title">
	</div>
	<div class="form-group">
		<label for="inputBody">Body</label>
		<textarea class="form-control" id="inputBody" rows="6" name="body"> <?= isset($_POST['body']) ? $_POST['body'] : $post['body']?> </textarea>
	</div>
	<?php
		$status = isset($_POST['radioStatus']) ? $_POST['radioStatus'] : $post['status'];
	?>
	<div class="form-group">
		<label>Status</label>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="radio" name="radioStatus" id="radioStatus1" value="0" <?= $status == 0 ? 'checked' : '' ?> />
				Draft
			</label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="radio" name="radioStatus" id="radioStatus2" value="1" <?= $status == 1 ? 'checked' : '' ?> />
				Active
			</label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="radio" name="radioStatus" id="radioStatus3" value="2" <?= $status == 2 ? 'checked' : '' ?> />
				Delete
			</label>
		</div>
	</div>

	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>