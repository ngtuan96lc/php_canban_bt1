			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /.content-wrapper -->
		<footer class="sticky-footer">
			<div class="container">
				<div class="text-center">
					<small>Copyright &copy; Your Website 2017</small>
				</div>
			</div>
		</footer>
		<!-- Scroll to Top Button -->
		<a class="scroll-to-top rounded" href="#page-top">
		<i class="fa fa-angle-up"></i>
		</a>
		<!-- Logout Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						Select "Logout" below if you are ready to end your current session.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<a class="btn btn-primary" href="logout.php">Logout</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Bootstrap core JavaScript -->
		<script src="public/vendor/jquery/jquery.min.js"></script>
		<script src="public/vendor/popper/popper.min.js"></script>
		<script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- Plugin JavaScript -->
		<script src="public/vendor/jquery-easing/jquery.easing.min.js"></script>
		<script src="public/vendor/chart.js/Chart.min.js"></script>
		<script src="public/vendor/datatables/jquery.dataTables.js"></script>
		<script src="public/vendor/datatables/dataTables.bootstrap4.js"></script>
		<!-- Custom scripts for this template -->
		<script src="public/js/sb-admin.min.js"></script>
		<script type="text/javascript">
			$(function(){
				$('.deleteButton').on('click', function(){
					var id;
					id = $(this).attr('data-id');
					$('#deleteAccept').attr('href','posts.php?action=delete&post_id='+id);
				});
			});
			$(function(){
				$('.deleteButtonContact').on('click', function(){
					var id;
					id = $(this).attr('data-id');
					$('#deleteAcceptContact').attr('href','contact.php?action=delete&contact_id='+id);
				});
			});
		</script>
	</body>
</html>