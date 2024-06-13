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
<script src="js/customer_win.js"></script>	
<body>
	<?php include('top_menus.php'); ?>
	<div class="row row-offcanvas row-offcanvas-left">
	<?php include('left_menus.php'); ?>
	<div class="col-md-9 col-lg-10 main"> 
	<h2>Customer / Won</h2>
	<div> 	
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-2" align="right">
					<button type="button" id="addOpportunity" class="btn btn-info" title="Add Opportunity"><span class="glyphicon glyphicon-plus">Add</span></button>
				</div>
			</div>
		</div>
		<table id="leadsListing" class="table table-bordered table-striped">
			<thead>
				<tr>						
					<th>Id</th>					
					<th>Name</th>					
					<th>Company</th>
					<th>Industry</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Website</th>					
					<th></th>	
					<th></th>	
					<th></th>						
				</tr>
			</thead>
		</table>
	</div>
	
	<div id="leadsDetails" class="modal fade">
		<div class="modal-dialog">    		
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"></button>
					<h4 class="modal-title"><i class="fa fa-plus"></i> Tasks Details</h4>
				</div>
				<div class="modal-body">
					<table id="" class="table table-bordered table-striped">
						<thead>
							<tr>						
								<th>Id</th>					
								<th>Created</th>					
								<th>Task Type</th>
								<th>Description</th>	
								<th>Due Date</th>
								<th>Status</th>	
								<th>Contact</th>
								<th>Sales Rep</th>														
							</tr>
						</thead>
						<tbody id="leadsList">							
						</tbody>
					</table>								
				</div>    				
			</div>    		
		</div>
	</div>	
	<div id="leadsModal" class="modal fade">
		<div class="modal-dialog">
			<form method="post" id="leadsForm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"></button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Edit Leads</h4>
					</div>
					<div class="modal-body">
						<div class="form-group"
							<label for="project" class="control-label">Contact First</label>
							<input type="text" class="form-control" id="lead_first" name="lead_first" placeholder="contact name" required>			
						</div>

						<div class="form-group"
							<label for="project" class="control-label">Contact Last</label>
							<input type="text" class="form-control" id="lead_last" name="lead_last" placeholder="contact last" >			
						</div>	
						
						<div class="form-group">
							<label for="address" class="control-label">Comapny</label>							
							<input type="text" class="form-control" id="lead_company" name="lead_company" placeholder="company" required>									
						</div>

						<div class="form-group">
							<label for="address" class="control-label">Industry</label>							
							<input type="text" class="form-control" id="lead_industry" name="lead_industry" placeholder="industry" required>									
						</div>
						
						<div class="form-group">
							<label for="address" class="control-label">Budget</label>							
							<input type="text" class="form-control" id="lead_budget" name="lead_budget" placeholder="budget" required>									
						</div>
						
						<div class="form-group">
							<label for="country" class="control-label">Status</label>							
							<select class="form-control" id="lead_status" name="lead_status"/>							
								<option value="Lead">Lead</option>
								<option value="Proposal">Proposal</option>
								<option value="Customer / won">Customer / won</option>
								<option value="Archive">Archive</option>							
							</select>							
						</div>
						
						<div class="form-group">
							<label for="address" class="control-label">Email</label>							
							<input type="text" class="form-control" id="lead_email" name="lead_email" placeholder="Email" required>									
						</div>
						
						<div class="form-group">
							<label for="address" class="control-label">Phone</label>							
							<input type="text" class="form-control" id="lead_phone" name="lead_phone" placeholder="Phone" required>									
						</div>
						
						<div class="form-group">
							<label for="address" class="control-label">Website</label>							
							<input type="text" class="form-control" id="lead_website" name="lead_website" placeholder="Website" required>									
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
</div>
</body>
</html>
