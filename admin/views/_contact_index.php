
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
		Data Table Contacts
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Message</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Message</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</tfoot>
				<tbody>
					<?php
						foreach ($contacts as $contact) {
							$status = 'Unread';
							if($contact['status'] == 0){
								$status = "Unread";
							} else if($contact['status'] == 1){
								$status = "Read";
							} else{
								$status = "Deleted";
							}
						?>
							<tr>
								<td><?= $contact['id']; ?></td>
								<td><?= $contact['name']; ?></td>
								<td><?= $contact['email']; ?></td>
								<td><?= $contact['phone']; ?></td>
								<td><?= $contact['message']; ?></td>
								<td><?= $status ?></td>
								<td> 
									<a class="btn btn-primary" href="contact.php?action=reply&contact_id=<?= $contact['id']?>" role="button">Reply</a> 
									<a class="btn btn-success" href="contact.php?action=read&contact_id=<?= $contact['id']?>" role="button">Read</a> 
									<a class="btn btn-danger deleteButtonContact" data-toggle="modal" data-id="<?= $contact['id']?>" data-target="#deleteContactModal" href="" role="button">Delete</a>
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
