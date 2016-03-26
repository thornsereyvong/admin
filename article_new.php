<?php
/*
 * *****************************************************************************
 * file: article_new.php
 * @autor: Thorn sereyvong
 * @date: 08-09-2015
 * ZOBENZ TEAM
 * *****************************************************************************
 */
?>
<?php

$title = "New Article";

include_once 'head.php';
include_once 'header.php';
include_once 'slidebar.php';

?>
<style>
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			New Article <small>Control panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo $server;?>"><i class="fa fa-home"></i> Home</a></li>
			<li class="active">New Article</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-sm-12">
				<div class="box box-info">
					<div class="box-footer">
						<button type="submit" name="btnsearch" id="btnsearch"
							class="btn btn-info pull-right">
							<i class="fa fa-floppy-o"></i> &nbsp;Save
						</button>
					</div>
				</div>
			</div>
			<!-- Start Form -->
			<div class="col-md-9 col-sm-12">
				<div class="box box-solid">
					<div class="box-header with-border">
						<i class="fa fa-info-circle"></i>
						<h3 class="box-title">Detail</h3>
					</div>
					<div class="box-body">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label><span class="text-red">*</span> Title</label> <input
									type="text" class="form-control" placeholder="Enter Title...">
							</div>
						</div>
						<div id="detail" class="col-md-12 col-sm-12">
							<textarea id="editor1" name="editor1">
								
							</textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12">
				<div class="box box-solid">
					<div class="box-header with-border">
						<i class="fa  fa-globe"></i>
						<h3 class="box-title">Publish</h3>
					</div>
					<div class="box-body">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label></label> <select class="form-control">
									<option>Publish</option>
									<option>Unpublish</option>
								</select>
							</div>
						</div>

					</div>
				</div>
				<div class="box box-solid">
					<div class="box-header with-border">
						<i class="fa fa-th"></i>
						<h3 class="box-title">Category</h3>
					</div>
					<div class="box-body">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label></label> <select class="form-control">
									<option>cat 1</option>
									<option>cat 2</option>
								</select>
							</div>
						</div>

					</div>
				</div>
				<div class="box box-solid">
					<div class="box-header with-border">
						<i class="fa fa-file-image-o"></i>
						<h3 class="box-title">Image Controll</h3>
					</div>
					<div class="box-body">
						<div class="col-md-12 col-sm-12  text-center">
							<a class="btn btn-app" id="browse"> <i class="fa fa-photo"></i>
								Add To Text
							</a> <a class="btn btn-app" id="choose"> <i class="fa fa-photo"></i>
								Thumbnail
							</a>
						</div>

					</div>
				</div>

			</div>

			<!-- end Form -->

		</div>

		<input type="hidden" id="alertMes" data-toggle="modal"
			data-target="#myModal" />
		<div class="modal fade modal-danger" id="myModal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Require Field!</h4>
					</div>
					<div class="modal-body">
						<p>Please input *field require.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline pull-right"
							data-dismiss="modal">Close</button>

					</div>
				</div>

			</div>
		</div>
		<input type="hidden" id="alertMesError" data-toggle="modal"
			data-target="#myError" />
		<div class="modal fade modal-danger" id="myError" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Error!</h4>
					</div>
					<div class="modal-body">
						<p>Please try again...</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline pull-right"
							data-dismiss="modal">Close</button>

					</div>
				</div>

			</div>
		</div>
	</section>
</div>

<input type="hidden" id="show_img" data-toggle="modal"
	data-target="#show_img_detail" />
<div class="modal fade" id="show_img_detail" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Choose Image</h4>
			</div>
			<div class="modal-body">
				<div class="col-sm-6">
					<form id="frm_upload_img" action="" style="display:none;">
						<input accept="image/*" type="file" name="img_upload" id="inp_img"> 
					</form>
								
					<a class="btn btn-app" id="browse_img"> <i class="fa fa-photo"></i>
						Browse
					</a>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search...">
					</div>
				</div>
				<div class="col-sm-12">
					<hr />
				</div>
				<div class="col-sm-12">
					<?php for($i=0; $i<12 ; $i++){?>
					<div class="col-sm-2">
						<a href="#" class="thumbnail"> <img src="img/profile.jpg" width="100%" /></a>
					</div>
					<?php } ?>
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-12">
					<label>Page: <span id="currentPage">0</span> of <span
						id="totalPage">0</span>
					</label>
					<div class="btn-group pull-right" role="group">
						<button onClick="previous()" id="pre" type="button"
							class="btn btn-default">
							<i class="fa  fa-angle-double-left"></i>
						</button>
						<div class="btn-group" role="group">
							<input id="pagenum" onchange="goPage()" type="text"
								style="width: 60px;" class="form-control">
						</div>
						<button onClick="next()" id="nex" type="button"
							class="btn btn-default">
							<i class="fa  fa-angle-double-right"></i>
						</button>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<BR>
			<div class="modal-footer">
				<button type="submit" name="btnsearch" id="btnsearch"
					class="btn btn-danger">
					<i class="fa   fa-times-circle"></i> &nbsp;Delete
				</button>
				<button type="submit" name="btnsearch" id="btnsearch"
					class="btn btn-info pull-right">
					<i class="fa  fa-plus-circle"></i> &nbsp;Add
				</button>
			</div>
		</div>

	</div>
</div>






<?php  include_once 'footer.php'; ?>
<script src="plugins/ckeditor/ckeditor.js"></script>
<script src="bootstrap/js/jquery.form.js"></script>

<script>
	$(function () {
        CKEDITOR.replace('editor1');

    	$("#choose").click(function(){
    		// img = "<img src='img/profile.jpg'/>'";
    		// CKEDITOR.instances.editor1.insertHtml(img);
    		$("#show_img").click();
	   	});	

    	$("#browse_img").click(function(){
			$("#inp_img").click();
    	});

    	$("#inp_img").change(function(){
			alert();
    		
        });
		
    	/* var fd = new FormData();    
    	fd.append( 'file', input.files[0] );

    	$.ajax({
    	  url: 'http://example.com/script.php',
    	  data: fd,
    	  processData: false,
    	  contentType: false,
    	  type: 'POST',
    	  success: function(data){
    	    alert(data);
    	  }
    	}); */


		
    });
</script>

