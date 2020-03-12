<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin <sup>2</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Delivery Agent
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-fw fa-cog"></i>
          <span>Delivery Agent</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Delivery Agent</h6>
            <a class="collapse-item" href="insert_deliveryagent.php">Add</a>
            <a class="collapse-item" href="#">View/Update</a>
          </div>
        </div>
      </li>
	   <div class="sidebar-heading">
        Product
      </div>
	   <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Product</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Product</h6>
            <a class="collapse-item" href="insert_product.php">Add</a>
            <a class="collapse-item" href="update_product.php">View/Update</a>
          </div>
        </div>
      </li>

  


   

 
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

           

            

         

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

       

         
     
          

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
				<?php
				if((isset($_GET["id"])&& $_GET["id"] !=''))
				{
				?>
					<h6 class="m-0 font-weight-bold text-primary">Update Products</h6>
				<?php
				}
				else
				{					
				?>
				   <h6 class="m-0 font-weight-bold text-primary">Add Products</h6>
				<?php
				}
				?>
                </div>
                <div class="card-body">
					<form id = "contact-form" class="form-horizontal" action="get_response.php" method="post" >
					<input type="hidden" value="insert_product" name="method_name">
					<input type="hidden" value="<?php echo trim($_GET["id"]); ?>" name="method_id">
					  <div class="form-group">
						<label class="control-label col-sm-2" >Name:</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="name" placeholder="Enter Name">
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-2" >Unit:</label>
						<div class="col-sm-10">
						   <select class="form-control" name="unit" id="sel1">
							<option value="KG" selected>KG</option>
							<option value="GM">GM</option>
							<option value="DOZEN">DOZEN</option>
							<option value="UNIT">UNIT</option>
							
						  </select>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-2" >Price (e.g. 45.00):</label>
						<div class="col-sm-10"> 
						  <input type="text" pattern="[0-9]+(\.[0-9]+)" class="form-control" name="price" placeholder="Enter Price">
						</div>
					  </div>
					 
					  
					 
					 
					  <div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-2">
						  <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
						</div>
						 <div class="alert alert-success response_msg">
									  <strong>Success!</strong> Indicates a successful or positive action.
									  </div>
									  <div class="alert alert-danger response_msg_alrt" role="alert">
									  This is a danger alert—check it out!
									  </div>
					  </div>
					</form>
                </div>
              </div>

            </div>

            
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){

var sendata = {"method": "<?php echo trim($_GET["id"]); ?>","method_name":"load_product_byID"};
$.ajax({
type: "POST",
url: "get_response.php",
data: sendata,
success: function(data)
{
	var jsonresponse  = JSON.parse( data );
	if(jsonresponse.status=="true")
		{
			$("#contact-form [name='name']").val(jsonresponse.name);
			$("#contact-form [name='unit']").val(jsonresponse.unit);
			$("#contact-form [name='price']").val(jsonresponse.price);
			
		}
	else  
		{
			alert(jsonresponse.msg);
			window.location = "insert_product.php";
 
		}
}
});


$(".response_msg").css("display","none");
$(".response_msg_alrt").css("display","none");

$("#contact-form").on("submit",function(e){
e.preventDefault();
if($("#contact-form [name='name']").val() === '')
{
$("#contact-form [name='name']").css("border","1px solid red");
}
else if($("#contact-form [name='unit']").val() === '')
{
$("#contact-form [name='unit']").css("border","1px solid red");
}
else if($("#contact-form [name='price']").val() === '')
{
$("#contact-form [name='price']").css("border","1px solid red");
}
else
{
$("#loading-img").css("display","block");
var sendData = $( this ).serialize();
$.ajax({
type: "POST",
url: "get_response.php",
data: sendData,
success: function(data){
var jsonresponse  = JSON.parse( data );
if(jsonresponse.status=="true")
{
$(".response_msg").text(jsonresponse.msg);
$(".response_msg").slideDown().fadeOut(3000);
$("#contact-form").find("input[type=text], input[type=email],input[type=password], textarea").val("");
document.getElementById("btnsubmit").disabled = true;


}
else  
{
$(".response_msg_alrt").text(jsonresponse.msg);
$(".response_msg_alrt").slideDown().fadeOut(3000);
}

}
});
}

});

$("#contact-form input").blur(function(){
var checkValue = $(this).val();
if(checkValue != '')
{
$(this).css("border","1px solid #eeeeee");
}
});
});



</script>

</body>

</html>
