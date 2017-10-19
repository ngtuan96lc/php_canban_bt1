
<!-- Breadcrumbs -->
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="#">Dashboard</a>
	</li>
	<li class="breadcrumb-item active">My Dashboard</li>
</ol>

<!-- Example Tables Card -->
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-table"></i>
		Data Table Posts
		<a class="btn btn-success btn-sm" href="posts.php?action=add">New Post</a>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
				<thead>
					<tr>
						<th>Id</th>
						<th>Title</th>
						<th>Author</th>
						<th>Picture</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Id</th>
						<th>Title</th>
						<th>Author</th>
						<th>Picture</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</tfoot>
				<tbody>
					<?php
						foreach ($posts as $post) {
							$status = 'Draft';
							if($post['status'] == 0){
								$status = "Draft";
							} else if($post['status'] == 1){
								$status = "Active";
							} else{
								$status = "Deleted";
							}
						?>
							<tr>
								<td><?= $post['id'] ?></td>
								<td><?= $post['title'] ?></td>
								<td><?= $post['fullname'] ?></td>
								<td><?= $post['picture'] ?></td>
								<td><?= $status ?></td>
								<td> 
									<a class="btn btn-primary" href="posts.php?action=edit&post_id=<?= $post['id']?>" role="button">Edit</a> 
									<a class="btn btn-danger deleteButton" data-toggle="modal" data-id="<?= $post['id']?>" data-target="#deletePostModal" href="" role="button">Delete</a>
									<a class="btn btn-success" href="posts.php?action=restore&post_id=<?= $post['id']?>" role="button">Restore</a> 
								</td>
							</tr>
						<?php	
						}
					?>
					
				</tbody>
			</table>
		</div>
	</div>
	<div class="card-footer small text-muted">
		Updated yesterday at 11:59 PM
	</div>
</div>
