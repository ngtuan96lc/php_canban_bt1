<?php
	include_once('app/init.php');
	include_once('views/_header.php');


	if(isset($_GET['action']) && $_GET['action'] == "delete"){
		$id = $_GET['contact_id'];
		if(deleteContact($id)){
			header('Location: contact.php');
		} else {
			header('Location: contact.php');
		}
	} elseif(isset($_GET['action']) && $_GET['action'] == "read"){
		$id = $_GET['contact_id'];
		if(readContact($id)){
			header('Location: contact.php');
		} else {
			header('Location: contact.php');
		}
	} elseif (isset($_GET['action']) && $_GET['action'] == "reply") {
		$id = $_GET['contact_id'];
		

	} else {
		// show contact_index
		$contacts = getAllContacts();
		include_once('views/_contact_index.php');

	}
?>


<!-- Delete_Contact Modal -->
<div class="modal fade" id="deleteContactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Select "Delete" to Delete this contact !
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" id="deleteAcceptContact" href="">Delete</a>
			</div>
		</div>
	</div>
</div>




<?php 
	include_once('views/_footer.php');
?>