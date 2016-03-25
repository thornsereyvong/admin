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
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">
					Info Artice
				</h3>
				<div class="box-tools pull-right">
					<button class="btn btn-box-tool" data-widget="collapse">
						<i class="fa fa-minus"></i>
					</button>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="form-group">
							<label>Post Status</label> <select name="poststatus"
								id="poststatus" class="form-control select2 input-lg"
								style="width: 100%;">
								<option value="All">All</option>
								<option value="Open">Open</option>
								<option value="Posted">Posted</option>
								<option value="Voided">Voided</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<button type="submit" name="btnsearch" id="btnsearch"
					class="btn btn-info pull-right">
					<i class="fa fa-floppy-o"></i> &nbsp;Save
				</button>
			</div>
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
<?php include_once 'footer.php'; ?>      
