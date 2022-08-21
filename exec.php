<?php
		echo 'text '.$_POST['ftext'];
		echo '<br>';
		echo 'password '.$_POST['fpassword'];
		echo '<br>';
		echo 'textarea '.$_POST['ftextarea'];
		echo '<br>';
		echo 'hidden '.$_POST['fhidden'];
		echo '<br>';
		echo 'checkbox1 '.$_POST['fcheckbox1'];
		echo '<br>';
		echo 'checkbox2 '.$_POST['fcheckbox2'];
		echo '<br>';
		echo '<pre>';
		echo 'select1 ';
		echo '<br>';
		print_r($_POST[fselect1]);
		echo '<br>';
		echo 'select2 ';
		echo '<br>';
		print_r($_POST[fselect2]);
		echo '</pre>';
		echo '<br>';
		echo 'radio '.$_POST['fradio'];
		echo '<br>';
		echo 'filename '.$_FILES['filename']['name'];
		echo '<br>';
		echo '<pre>';
		echo 'filename ';
		echo '<br>';
		print_r($_FILES['filename']);
		echo '</pre>';

		echo '<pre>';
		print_r($_POST);
		print_r(parse_url('http://localhost/index.php?id=1&fio=%D1%82%D0%B5%D1%81%D1%82'));
		echo '</pre>';
		echo '<br>';
		
		if(is_uploaded_file($_FILES['filename']['tmp_name'])){
			echo "файл загружен";
		}
		else{
			echo "файл НЕ загружен";
		}
?>
