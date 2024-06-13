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
<title>Demo Customer Relationship Management (CRM) System</title>
<body>  	
  <?php include('top_menus.php'); ?>	
    <div class="row row-offcanvas row-offcanvas-left">
      <?php include('left_menus.php'); ?>
      <div class="col-md-9 col-lg-10 main"> 
		<h2>Dashboard</h2>
        <div class="row mb-3">		
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-success">
              <div class="card-block bg-success">
                <div class="rotate">
                  <i class="fa fa-sort-amount-asc fa-5x"></i>
                </div>
                <h6 class="text-uppercase">Sales People</h6>
                <h1 class="display-1"><a href="sales_people.php">10</a></h1>
              </div>
            </div> 
          </div>        
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-info">
              <div class="card-block bg-info">
                <div class="rotate">
                  <i class="fa fa-tasks fa-5x"></i>
                </div>
                <h6 class="text-uppercase">Tasks</h6>
                <h1 class="display-1"><a href="tasks.php">50</a></h1>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-warning">
              <div class="card-block bg-warning">
                <div class="rotate">
                  <i class="fa fa-user fa-5x"></i>
                </div>
                <h6 class="text-uppercase">Contact</h6>
                <h1 class="display-1"><a href="contact.php">40</a></h1>
              </div>
            </div>
          </div>		  
        </div>
        <hr>         
       </div>       
      </div>     
</body>
</html>
