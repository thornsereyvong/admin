<?php
/*
 * *****************************************************************************
 * file: index.php
 * @autor: Thorn sereyvong
 * @date: 08-09-2015
 * ZOBENZ TEAM
 * *****************************************************************************
 */
?>
<?php
$title = "Dashboard";

include_once 'head.php';
include_once 'header.php';
include_once 'slidebar.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard <small>Control panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo $server;?>"><i class="fa fa-home"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section>
</div>
<?php include_once 'footer.php'; ?>      
