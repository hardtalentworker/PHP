<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" charset="utf-8">
<head>
	<title>без имени</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
	<?php
<<<<<<< HEAD
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
=======
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
		foreach($arr as $key=>$volume){
			fwrite($handle,$key.';'.$volume);
		}
		//fputcsv($handle,$arr);
		fclose($handle);
>>>>>>> 4af2345b861986914ce700c6d2c488a11297271b
	?>
	<form method='post' enctype='multipart/form-data'>
		<br>Имя: <input type='text' name='fname' maxlength='50' size='10' value=''><br>
		<br>Фамилия: <input type='text' name='ffam' maxlength='50' size='10' value=''><br>
		<br>e-mail: <input type='text' name='femail' maxlength='50' size='10' value=''><br>
		<br><input type='submit' name='fsubmit' value='fsubmitText'><br>
	</form>
</body>
</html>
