<?php
	if (isset($_FILES['photo'])) {
		if ($_FILES['photo']['error'] != 0) {
			echo 'Ошибка загрузки файла';
		}
		if (!getimagesize($_FILES['photo']['tmp_name'])) {
			echo 'Ошибка загрузки. Выберите другой файл';
			die;
		}
		
		if ($_FILES['photo']['type'] == 'image/png') {
			$ext = '.png';
		} elseif ($_FILES['photo']['type'] == 'image/jpeg') {
			$ext = '.jpg';
		} elseif ($_FILES['photo']['type'] == 'image/gif') {
			$ext = '.gif';
		}
		
		$new_name = uniqid().$ext;
		move_uploaded_file($_FILES['photo']['tmp_name'], '../public_html/images/'.$new_name);
		header('Location: ../public_html/index.php');
	}
?>