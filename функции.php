<?php
  $number=5;						//возведение числа $number в степень $exp
	$exp=5;
	$result=$number;
	for($i=1;$i<$exp;$i++){
		$result*=$number;
	}
	echo ($result);
//*****************************************************************
  $x=8;
	if(($x&1)==0){					//проверка на чётность, побитовая операция
		echo ('чётное');
	}elseif(($x&1)==1){
		echo ('нечётное');
	}
//*****************************************************************
	$file_extension='extension.txt';		//вывод в файл всех констант и расширений подключенных  в PHP
    $file_constant='constant.txt';
    
    //php -m
    $dataOut='';
    foreach (get_loaded_extensions() as $key => $value)
        $dataOut.=$key." ".$value."\n";
    file_put_contents($file_extension, $dataOut);
    
    $dataOut='';
    foreach (get_defined_constants() as $key => $value)
        $dataOut.=$key." ".$value."\n";
    file_put_contents($file_constant, $dataOut);
  //*****************************************************************    
    $var=200;											//вычисление 200-го числа Фибоначчи
	$n1=0;
	$n=1;
	for($i=3;$i<=$var;$i++){
		$result=$n1+$n;
		echo $i.") ".$n1." + ".$n." = ".$result.PHP_EOL;
		$n1=$n;
		$n=$result;
	}
