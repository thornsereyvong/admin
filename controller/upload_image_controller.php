<?php
	include_once '../app.php';
	include_once '../Model/Image.php';	
	if(isset($_FILES['img_upload']) && $_FILES['img_upload']['size'] != 0){
		if((new Image())->upload_image($_FILES['img_upload'], 'uploads/images', $_POST['type'])){
			echo 'success';
		}else{
			echo 'Errors';
		}
	}
	