<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Admin Panel</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>admin_assets/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>admin_assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>admin_assets/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>admin_assets/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>admin_assets/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>admin_assets/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<!-- Core JS files -->
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/main/jquery.min.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/inputs/inputmask.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/extensions/jquery_ui/core.min.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/tags/tagsinput.min.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/tags/tokenfield.min.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/inputs/maxlength.min.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/inputs/formatter.min.js"></script>
	
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/demo_pages/form_floating_labels.js"></script>
	<!-- Theme JS files -->
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="<?php echo base_url();?>admin_assets/assets/js/app.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/demo_pages/datatables_advanced.js"></script>
	
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/date/jquery-ui.js"></script>
		<script>
		   $( function() 
		   {
				var d = new Date();
				d.setFullYear(d.getFullYear()+10);
		   
				var date = $('.datepicker').datepicker({dateFormat: 'dd-mm-yy',changeMonth: true,
				changeYear: true,minDate:0}).val();
		   } );
		</script>
	
	<!-- /theme JS files -->
	<style>
		.error
		{
			color:red;
		}
	</style>
			<style>
				#divLoading
				{
					display : none;
				}
				#divLoading.show
				{
					display : block;
					position : fixed;
					z-index: 100;
					background-color:#666;
					background-image : url('<?php echo base_url();?>admin_assets/3.gif');
					opacity : 0.4;
					background-repeat : no-repeat;
					background-position : center;
					left : 0;
					bottom : 0;
					right : 0;
					top : 0;
				}
				#loadinggif.show
				{
					left : 50%;
					top : 50%;
					position : absolute;
					z-index : 101;
					width : 32px;
					height : 32px;
					margin-left : -16px;
					margin-top : -16px;
				}
				div.content {
				   width : 100%;
				   height : 100%;
				}
			</style>
			<style>
			.switch {
			  position: relative;
			  display: inline-block;
			  width: 60px;
			  height: 27px;
			}

			.switch input {display:none;}

			.slider {
			  position: absolute;
			  cursor: pointer;
			  top: 0;
			  left: 0;
			  right: 0;
			  bottom: 0;
			  background-color: #ccc;
			  -webkit-transition: .4s;
			  transition: .4s;
			}

			.slider:before {
			  position: absolute;
			  content: "";
			  height: 18px;
			  width: 18px;
			  left: 4px;
			  bottom: 4px;
			  background-color: white;
			  -webkit-transition: .4s;
			  transition: .4s;
			}

			input:checked + .slider {
			  background-color: #2196F3;
			}

			input:focus + .slider {
			  box-shadow: 0 0 1px #2196F3;
			}

			input:checked + .slider:before {
			  -webkit-transform: translateX(26px);
			  -ms-transform: translateX(26px);
			  transform: translateX(26px);
			}

			/* Rounded sliders */
			.slider.round {
			  border-radius: 8px;
			}

			.slider.round:before {
			  border-radius: 50%;
			}
		</style>

<script src='http://cdn.tinymce.com/4/tinymce.min.js'></script>
 <script>   
   tinymce.init({
			selector: '.editor',
			themes: "modern", 
			menubar:false,
			statusbar: false,
			height:250,
			plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen table"],
			fontsize_formats: "12px 14px 16px 18px 24px 28px 30px 36px 40px",
			toolbar: "fontsizeselect | fontselect | insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link table"
		  });   
   </script> 


  
</head>

<body>

	<!-- Main navbar -->
<?php 
	
	$this->load->view('admin/back_end/topbar');

?>
	<!-- /main navbar -->
	<div id="divLoading"> 		
    </div>

	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<?php $this->load->view('admin/back_end/menu'); ?>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><a href="<?php echo site_url('Stock');?>"><i class="icon-arrow-left52 mr-2"></i></a> <span class="font-weight-semibold">New Item</span> </h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>
				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="<?php echo site_url('home/dashboard');?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">New Item</span>
						</div>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Floating labels -->
				<div class="row">
				
					<div class="col-md-12">
                    <form class="form-horizontal" action="<?php echo site_url('stock/save_item');?>" method="POST" enctype="multipart/form-data">
                        
						<!-- Other inputs -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title"><b>Add New Item</b></h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		</div>
			                	</div>
							</div>
							<div class="card-body">
							
							
							<div class="row">
								<div class="col-md-2">												 
								</div>
								<div class="col-md-2">
									<label> <b>UPC/EAN/ISBN: <span class="text-danger">*</span></b></label>
								</div>
								<div class="col-md-6">
										<input type="text" class="form-control" name="isbn" id="isbn" required autocomplete="off">
								</div> 		 
							</div> <br/>
							
							
							<div class="row">
								<div class="col-md-2">												 
								</div>
								<div class="col-md-2">
									<label> <b>Item Name: <span class="text-danger">*</span></b></label>
								</div>
								<div class="col-md-6">
										<input type="text" class="form-control" name="item_name" id="item_name" required autocomplete="off">
								</div> 		 
							</div> <br/>
							 
							 
							<div class="row">
								<div class="col-md-2">												 
								</div>
								<div class="col-md-2">
									<label> <b>Size: <span class="text-danger"> </span></b></label>
								</div>
								<div class="col-md-6">
										<input type="text" class="form-control" name="size" id="size" autocomplete="off">
								</div> 		 
							</div> <br/>
							
							
							<div class="row">
								<div class="col-md-2">												 
								</div>
								<div class="col-md-2">
									<label> <b>Description: <span class="text-danger"> </span></b></label>
								</div>
								<div class="col-md-6">
										<textarea name="desc" id="desc" class="form-control editor"></textarea>
								</div> 		 
							</div> <br/>
							
							
							<div class="row">
								<div class="col-md-2">
												 
								</div>
								<div class="col-md-2">
									<label> <b>Choose Avatar: <span class="text-danger"> </span></b></label>
								</div>
								<div class="col-md-6">
										<input type="file" name="avatar" id="avatar" class="form-control-uniform" data-fouc>
										<span class="form-text text-muted">Max file size 5 Mb</span> 
								</div> 		 
							</div> <br/>
							
							
							 <div class="row">
								<div class="col-md-2">
												 
								</div>
								<div class="col-md-2">
									<label> <b>Cost Price : <span class="text-danger">*</span></b></label>
								</div>
								<div class="col-md-6">
										<input type="text" class="form-control" name="cost_price" id="cost_price" required autocomplete="off" onkeypress="return isNumber();">
								</div> 		 
							</div> <br/>
							
							
							 <div class="row">
								<div class="col-md-2">
												 
								</div>
								<div class="col-md-2">
									<label> <b>Selling Price : <span class="text-danger">*</span></b></label>
								</div>
								<div class="col-md-6">
										<input type="text" class="form-control" name="selling_price" id="selling_price" required autocomplete="off"  onkeypress="return isNumber();">
								</div> 		 
							</div> <br/>
							
							
							<div class="row">
								<div class="col-md-2">
												 
								</div>
								<div class="col-md-2">
									<label> <b>Quantity : <span class="text-danger">*</span></b></label>
								</div>
								<div class="col-md-6">
										<input type="text" class="form-control" name="quantity" id="quantity" required autocomplete="off"  onkeypress="return isNumber();">
								</div> 		 
							</div> <br/>
							
							<div class="row">
								 <div class="col-md-2">
												 
								</div>
								<div class="col-md-2">
								
								 </div>
								<div class="col-md-6">
									<button type="submit" class="btn btn-primary" name="upload_now">Save</button>
								</div> 	
								</div>
							</div>
						</div>
					</form>
					</div>
				</div>
				<!-- /floating labels -->

		
			<!-- content area -->

	<div class="card" id="validation_result">
				<div class="card">
					
				</div>
			
			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						<a href="#">Application</a> by <a href="http://webomindapps.com" target="_blank">Webomindapps Pvt Ltd</a>
					</span>

					
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	
<script>
function isNumber(evt) 
{
   evt = (evt) ? evt : window.event;
   var charCode = (evt.which) ? evt.which : evt.keyCode;
   if (charCode > 31 && (charCode < 48 || charCode > 57)) 
{
       return false;
   }
   return true;
}
 
</script>

 
   
<script>
	/*
(function($) {
   $.fn.checkFileType = function(options) {
       var defaults = {
           allowedExtensions: [],
           success: function() {},
           error: function() {}
       };
       options = $.extend(defaults, options);

       return this.each(function() {

           $(this).on('change', function() {
               var value = $(this).val(),
                   file = value.toLowerCase(),
                   extension = file.substring(file.lastIndexOf('.') + 1);

               if ($.inArray(extension, options.allowedExtensions) == -1) {
                   options.error();
                   $(this).focus();
               } else {
                   options.success();

               }

           });

       });
   };

})(jQuery);

$(function() {
   $('#userfile').checkFileType({
       allowedExtensions: ['png', 'jpeg','jpg'],
       success: function() {


       },
       error: function() 
		{
			$('#userfile').val("null");
		    alert('Upload Image only');
			return false;
			
			
	   }
   });

});

	*/	 
	</script>

</body>
</html>
