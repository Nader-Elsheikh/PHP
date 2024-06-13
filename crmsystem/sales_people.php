<?php

include_once 'config/Database.php';
include_once 'class/User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

if(!$user->loggedIn()) {
	header("Location: index.php");
}
include('inc/header4.php');
?>
<title>phpzag.com : Demo Customer Relationship Management (CRM) System</title>
<script src="js/sales_rep.js"></script>	
<body>
	<?php include('top_menus.php'); ?>
		<div class="row row-offcanvas row-offcanvas-left">
		<?php include('left_menus.php'); ?>
		<div class="col-md-9 col-lg-10 main"> 
		<h2>Sales</h2> 
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-2" align="right">
					<button type="button" id="addSalesRep" class="btn btn-info" title="Add Sales Rep"><span class="glyphicon glyphicon-plus">Add</span></button>
				</div>
			</div>
		</div>
		<table id="salesRepListing" class="table table-bordered table-striped">
			<thead>
				<tr>						
					<th>Id</th>					
					<th>Name</th>					
					<th>Email</th>
					<th>Status</th>	
					<th></th>	
					<th></th>	
					<th></th>						
				</tr>
			</thead>
		</table>
	</div>
	
	<div id="salesRepDetails" class="modal fade">
		<div class="modal-dialog">    		
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"></button>
					<h4 class="modal-title"><i class="fa fa-plus"></i> Contact Details</h4>
				</div>
				<div class="modal-body">
					<table id="" class="table table-bordered table-striped">
						<thead>
							<tr>						
								<th>Id</th>					
								<th>Name</th>					
								<th>Company</th>
								<th>Status</th>	
								<th>Industry</th>
								<th>Status</th>		
								<th>Budget ($)</th>														
							</tr>
						</thead>
						<tbody id="salesRepRow">							
						</tbody>
					</table>								
				</div>    				
			</div>    		
		</div>
	</div>	
	<div id="salesRepModal" class="modal fade">
		<div class="modal-dialog">
			<form method="post" id="salesForm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"></button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Edit Sales Representative</h4>
					</div>
					<div class="modal-body">
						<div class="form-group"
							<label for="project" class="control-label">Contact First</label>
							<input type="text" class="form-control" id="sales_name" name="sales_name" placeholder="sales name" required>			
						</div>					
						
						<div class="form-group">
							<label for="address" class="control-label">Email</label>							
							<input type="email" class="form-control" id="sales_email" name="sales_email" placeholder="email" required>									
						</div>
						<div class="form-group">
							<label for="address" class="control-label" id="newPassword">Password</label>							
							<input type="password" class="form-control" id="sales_password" name="sales_password" placeholder="password" required>									
						</div>
						
					</div>
					<div class="modal-footer">
						<input type="hidden" name="id" id="id" />
						<input type="hidden" name="action" id="action" value="" />
						<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</form>
		</div>
	</div>
			
</div>
</body>
</html>
