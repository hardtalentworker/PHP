<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" charset="utf-8">
<head>
	<title>без имени</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
	<?php
	if(isset($_POST['fsubmit'])){
			if(isset($_POST['name'])){
				setcookie('fio',$_POST['name'].' '.$_POST['fam']);
			}
			header('location: '.$_SERVER['PHP_SELF']);
			exit();
		}
		if(isset($_POST['freset'])){
			setcookie ('fio', '', time() - 3600);
			header('location: '.$_SERVER['PHP_SELF']);
			exit();
		}
		
		//print_r($_ENV);
		//echo '<br><br>';
		echo($_ENV['ENVIRONMENT']);
		echo '<br><br>';
		
		if(!isset($_ENV['ENVIRONMENT'])){
			echo '<p><font color="red">Режим разработки</font></p><br><br>';
		}else{
			if($_ENV['ENVIRONMENT']=='test'){
				echo '<p><font color="blue">Режим тестирования</font></p><br><br>';
			}elseif($_ENV['ENVIRONMENT']=='production'){
				echo '<p><font color="green">Режим эксплуатации</font></p><br><br>';
			}
		}
	
		if(isset($_COOKIE['fio'])){
			if((date('H')>=5)&(date('H')<11)){
				echo 'Доброе утро, '.$_COOKIE['fio'].'<br>';
			}elseif((date('H')>=11)&(date('H')<16)){
				echo 'Добрый день, '.$_COOKIE['fio'].'<br>';
			}elseif(date('H')>=16){
				echo 'Добрый вечер, '.$_COOKIE['fio'].'<br>';
			}elseif(date('H')<5){
				echo 'Доброй ночи, '.$_COOKIE['fio'].'<br>';
			}
			echo '<br><br>';
			echo "<form method='post' enctype='multipart/form-data'>";
			echo "<input type='submit' name='freset' value='reset'><br>";
			echo "</form>";
		}else{
			echo "<form method='post' enctype='multipart/form-data'>";
			echo "Имя <input type='text' name='name' maxlength='50' size='10' value=''><br>";
			echo "Фамилия <input type='text' name='fam' maxlength='50' size='10' value=''><br>";
			echo "<input type='submit' name='fsubmit' value='fsubmitText'><br><br>";
			echo"</form>";
		}
	
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
