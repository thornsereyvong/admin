<?php
/*
 * *****************************************************************************
 * file: login.php
 * @autor: Thorn sereyvong
 * @date: 24-03-2016
 * ZOBENZ TEAM
 * *****************************************************************************
 */
?>
<?php

$title = "LOGIN ACCOUNT";
include_once 'head.php';

?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-sm-3 "></div>
		<div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="login-logo">
						<h2 class="text-center">Login Account</h2>
					</div>
					<!-- /.login-logo -->
					<div class="login-box-body">
						<p class="login-box-msg text-center"></p>
						<p class="" id="inv" style="color: #dd4b39; display: none;">*Email
							and Password invalid.</p>
						<div id="load"></div>
						<form id="frmSignIn" action="" method="post"
							novalidate="novalidate" class="bv-form">
							<button type="submit" class="bv-hidden-submit"
								style="display: none; width: 0px; height: 0px;"></button>
							<div class="form-group">
								<input type="text" name="email" value="" id="email"
									class="form-control" placeholder="Email" data-bv-field="email">
	
								<small class="help-block" data-bv-validator="regexp"
									data-bv-for="email" data-bv-result="NOT_VALIDATED"
									style="display: none;">The value is not a valid email address</small><small
									class="help-block" data-bv-validator="notEmpty"
									data-bv-for="email" data-bv-result="NOT_VALIDATED"
									style="display: none;">The email is required and cannot be empty</small>
							</div>
							<div class="form-group">
								<input type="password" value="" name="password" id="password"
									class="form-control" placeholder="Password"
									data-bv-field="password"> <small class="help-block"
									data-bv-validator="notEmpty" data-bv-for="password"
									data-bv-result="NOT_VALIDATED" style="display: none;">The
									password is required and cannot be empty</small>
							</div>
							<button type="submit" id="signin"
								class="btn btn-primary pull-right">Login</button>
	
	
						</form>
						<div class="clearfix"></div>
						<a href="#">I forgot my password.</a><br> 
					</div>
					<!-- /.login-box-body -->
				</div>
				<div class="col-sm-2"></div>
			</div>
		</div>
	</div>
</div>
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="bootstrap/js/jquery-ui.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrapValidator.js"></script>
<script src="bootstrap/js/function.mine.js"></script> 

<script type="text/javascript">
	function error(){
		$("#inv").show();
		$("#username").parent().removeClass("has-success").addClass("has-error");
		$("#password").parent().removeClass("has-success").addClass("has-error");
	}

	$(function(){
		$("#signin").click(function(){
			$('#frmSignIn').submit();
		});
		$('#frmSignIn').bootstrapValidator({
			message: 'This value is not valid',//use to display message
			feedbackIcons: {
				valid: '',// show correct symbol when condition is valid
				invalid: '',// show incorrect symbol when condition is invalid
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				email: {
                    validators: {// check password is exist or not
                    	regexp: {
                            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                            message: 'The value is not a valid email address'
                        },
						notEmpty: {
							message: 'The email is required and cannot be empty'
						}
					}                    
				},
				password: {
					validators: {// check password is exist or not
						notEmpty: {
							message: 'The password is required and cannot be empty'
						}
					}
				}
		
			}
		}).on('success.form.bv', function(e) {	
			alert();			
			/* $.ajax({
				url: "login-controller",
				method: "POST",
				data: {
					username : $.trim($("#username").val()),
					password : $.trim($("#password").val()),
					company : $.trim($("#company").val())
				},success: function(data){
					if(data=="success"){
						window.location.href="<?php // echo $server;?>WEB_REPORT"; 	
					}else{
						error();
					}
				}
			});*/
		});
	});
</script>
