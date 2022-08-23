<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="ru" charset="utf-8">
<head>
	<title>без имени</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
	<?php
		if(!empty($_POST)){
			$fcheckbox=$_POST['fcheckbox'];
			$file="list.txt";
			file_put_contents($file,'');
			//$file=fopen("list.txt","w");
			if($file){
				foreach($fcheckbox as $key=>$value){
					//fwrite($file,$value);
					file_put_contents($file,$value,FILE_APPEND);
				}
			}
			//fclose($file);
		}
	?>
	<form method='post' enctype='multipart/form-data'>
		<?php
			$file=fopen("list.txt","r");
			$i=1;
			if($file){
				while(($str=fgets($file))!==FALSE){
					echo "<input type='checkbox' name='fcheckbox[]' value='{$str}' checked>{$str}";
					echo '<br>';
					$i++;
				}
				fclose($file);
			}
		?>
		<input type='submit' name='fsubmit' value='fsubmitText'><br>
	</form>
</body>
</html>
