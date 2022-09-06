<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" charset="utf-8">
<head>
	<title>без имени</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
	<?php
		require_once 'exec.php';
		$fname=0;
		$ffam=0;
		$femail=0;
		$options=['options'=>['regexp'=>'/^([а-яё]+|[a-z]+)$/i']]

		if(!empty($_POST)){
		    if(!empty($_POST['fname'])&!empty($_POST['ffam'])&!empty($_POST['femail'])){
		        filter_var($_POST['fname'],FILTER_VALIDATE_REGEXP,$options) ? $fname=1 : $fname=0;
		        filter_var($_POST['ffam'],FILTER_VALIDATE_REGEXP,$options) ? $ffam=1 : $ffam=0;
		        filter_var($_POST['femail'],FILTER_VALIDATE_EMAIL,$options) ? $femail=1 : $femail=0;
		        echo($fname.' '.$ffam.' '.$femail.'<br>');
		        if($fname&$ffam&$femail){
		            $param=[$_POST['fname'].' '.$_POST['ffam'],$_POST['femail']];
		            file_refresh('test.txt',$param,0);		            
		        }
		    }
		}
	?>
	<form method='post' enctype='multipart/form-data'>
		<br>Имя: <input type='text' name='fname' maxlength='50' size='10' value=''><br>
		<br>Фамилия: <input type='text' name='ffam' maxlength='50' size='10' value=''><br>
		<br>e-mail: <input type='text' name='femail' maxlength='50' size='10' value=''><br>
		<br><input type='submit' name='fsubmit' value='fsubmitText'><br>
	</form>
</body>
</html>
