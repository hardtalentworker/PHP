<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" charset="utf-8">

<head>
	<title>без имени</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>

<body>
	<?php
		$temp=[];							// поиск на сайте в интернете по регулярке
		$str = file_get_contents('http://php.net');
		preg_match_all('/<title>(.+)<\/title>/iu', $str,$temp);
		foreach($temp as $key=>$value){
		    $str=strip_tags(implode(",",$value));
		    echo $str.'<br>';
		}
		preg_match('/<title>(.+)<\/title>/iu', $str,$temp);
		$str=strip_tags(implode(",",$value));
		echo $str.'<br>';
	?>
	
	<form action='exec.php' method='post' target='_blank' enctype='multipart/form-data'>
		<input type='text' name='ftext' maxlength='50' size='10' value=''><br>
		<input type='password' name='fpassword' size='10'><br>
		<textarea name='ftextarea' cols='10' rows='5'>ftextareaTest</textarea><br>
		<input type='hidden' name='fhidden' value='fhiddenText'><br>
		<input type='checkbox' name='fcheckbox1' value='2' checked>fcheckboxText1<br>
		<input type='checkbox' name='fcheckbox1' value='2'>fcheckboxText2<br>
		<input type='checkbox' name='fcheckbox2' value='3'>fcheckboxText3<br>
		<input type='checkbox' name='fcheckbox2' value='4'>fcheckboxText4<br>
		<select name='fselect1[]' multiple size='5'>
			<option>foptionText1</option>
			<option value='foption2'>foptionText2</option>
		</select><br>		
		<select name='fselect2[]'>
			<option>foptionText3</option>
			<option value='foption4'>foptionText4</option>
		</select><br>
		<input type='radio' name='fradio' value='fradio1' checked>fradioText1<br>
		<input type='radio' name='fradio' value='fradio2'>fradioText2<br>
		<input type='file' name='filename' size='10'><br><br>
		
		<br>Количество: <input type='text' name='fkol' pattern="\d{1,3}" placeholder="###" maxlength='50' size='10' value=''><br>
		<br>Цена: <input type='text' name='fcost' pattern="\d{1,3}\.{1}\d{2}" placeholder="###.##" maxlength='50' size='10' value=''><br>
		
		<input type='submit' name='fsubmit' value='fsubmitText'><br>
	</form>
</body>

</html>
