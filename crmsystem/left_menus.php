<div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation">
<ul class="nav flex-column pl-1 left-menus">	
<li class="nav-item"><a class="nav-link" href="dashboard.php"><strong>Dashboard</strong></a></li>	
<?php if($_SESSION["role"] == 'manager') { ?>
	<li class="nav-item"><a class="nav-link" href="sales_people.php"><strong>Sales People</strong></a></li>
	<li class="nav-item"><a class="nav-link" href="tasks.php"><strong>Tasks</strong></a></li>
	<li class="nav-item"><a class="nav-link" href="contact.php"><strong>Contact</strong></a></li>
<?php } ?>

<?php if($_SESSION["role"] == 'sales') { ?>
	<li class="nav-item"><a class="nav-link" href="tasks.php"><strong>Tasks</strong></a></li>
	<li class="nav-item"><a class="nav-link" href="leads.php"><strong>Leads</strong></a></li>
	<li class="nav-item"><a class="nav-link" href="opportunity.php"><strong>Opportunity</strong></a></li>
	<li class="nav-item"><a class="nav-link" href="customer_win.php"><strong>Customer / Won</strong></a></li>
<?php } ?>
</ul>
</div>




