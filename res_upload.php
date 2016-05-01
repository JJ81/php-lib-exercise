<?php
	define('UPLOADPATH', 'images/');

	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type']; // type제한 스크립트 필요
	$file_size = $_FEILS['file']['size']; // 용량제한
	
	// 파일의 물리적 사이즈 제한이 가능한가?
	 
	$tmp_storage = $_FILES['file']['tmp_name'];
	$result = $FILES['file']['error']; // 0은 성공 그 외는 실패를 의미한다.

	move_uploaded_file($tmp_storage, UPLOADPATH . $file_name);


	if($result == 0)
	{
		echo 'upload'; 
	}
	else
	{
		echo 'error';
	}

?>
