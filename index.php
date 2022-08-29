<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" charset="utf-8">
<head>
	<title>без имени</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
	<?php
		$arr=explode(' ',$_SERVER['HTTP_USER_AGENT']);
		$arr1=explode('/',$arr[8]);
		if($arr1[0]!='Gecko'){
		    echo "<a href='exec.php'>exec.php</a><br>";
		    echo('<br><br>');
		    echo $_SERVER['HTTP_USER_AGENT'];
		    echo('<br><br>');
		    echo('Браузер '.$arr1[0].'<br>');
		    echo('версия '.$arr1[1].'<br>');
		    echo('ОС ').trim($arr[1],"(").' '.$arr[2].' '.trim($arr[3],";").'<br>';
		}else{
		    echo "Посещение запрешено";
		}
		echo('<br><br>');
		echo $_SERVER['REMOTE_ADDR'];
		
		unset($arr);
		$arr=[];
		
		if(($handle=fopen("ips.txt", "a+"))!== FALSE){
			while (($data = fgetcsv($handle, 1000, ";")) != null) {
			    $arr[$data[0]]=$data[1];
			    echo('<br>');
			    print_r($arr);
			}
			fclose($handle);
		}
		
		if($arr[$_SERVER['REMOTE_ADDR']]){
		    $arr[$_SERVER['REMOTE_ADDR']]+=1;
		}else{
		    $arr[$_SERVER['REMOTE_ADDR']]=1;
		}
		
		echo('<br>');
		print_r($arr);
		$handle = fopen('ips.txt', 'w');
		fputcsv($handle,$arr);
		fclose($handle);
	?>
</body>
</html>
