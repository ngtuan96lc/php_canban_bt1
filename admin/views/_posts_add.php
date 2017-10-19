<form action="" method="POST" enctype="multipart/form-data"> 
	<!-- <legend>Edit a post</legend> -->
	<div class="form-group">
		<label for="inputTitle">Title</label>
		<input type="text" class="form-control" id="inputTitle" name="title" value="" placeholder="Enter Title">
	</div>
	<div class="form-group">
		<label for="inputSubTitle">Sub Title</label>
		<input type="text" class="form-control" id="inputSubTitle" name="sub_title" value="" placeholder="Enter Sub Title">
	</div>
	<div class="form-group">
		<label for="inputBody">Body</label>
		<textarea class="form-control" id="inputBody" rows="6" name="body"> </textarea>
	</div>
	<div class="form-group">
		<label for="inputPostCover">Post Cover</label>
		<input type="text" class="form-control" id="inputPostCover" name="post_cover" value="" placeholder="Enter Post Cover">
	</div>
	<div class="form-group">
		<label>Status</label>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="radio" name="radioStatus" id="radioStatus1" value="0"/>
				Draft
			</label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="radio" name="radioStatus" id="radioStatus2" value="1"/>
				Active
			</label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="radio" name="radioStatus" id="radioStatus3" value="2" />
				Delete
			</label>
		</div>
	</div>

	<div class="form-group">
		<label for="selectFile">Select file: </label>
		<input type="file" id="selectFile" name="anh">
	</div>

	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>


