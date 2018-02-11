<?php

$uploadDir =__DIR__ . '/uploads/';

for ($x = 0 ; $x < count($_FILES['image']['name']) ; $x++){
	$uploadFile = $uploadDir.time().'_'.$_FILES['image']['name'][$x];

	if(move_uploaded_file($_FILES['image']['tmp_name'][$x], $uploadFile)){
		echo 'Uploaded successfully '.$_FILES['image']['name'][$x];
	}else{
		echo 'Something went wrong';
	}

}
