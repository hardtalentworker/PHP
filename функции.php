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
//*****************************************************************    календарь на текущий месяц
	echo date('d.m.Y H:i:s',mktime(0, 0, 0, date('m'), 1, date('Y'))).PHP_EOL;
	echo date('d.m.Y H:i:s',mktime(0, 0, 0, date('m')+1, 0, date('Y'))).PHP_EOL;
	echo date('N.D',mktime(0, 0, 0, date('m'), date('d'), date('Y'))).PHP_EOL;
	$startDay=mktime(0, 0, 0, date('m'), 1, date('Y'));
	$endDay=mktime(0, 0, 0, date('m')+1, 0, date('Y'));
	$emptyDay=date('N',mktime(0, 0, 0, date('m'), 1, date('Y')));
	
	echo "пн \t вт \t ср \t чт \t пт \t сб \t вс";
	echo PHP_EOL;
	for($j=1;$j<$emptyDay;$j++){
		echo "   \t ";
	}
	for($i=$startDay;$i<=$endDay;$i+=60*60*24){
		if($j>7){
			echo PHP_EOL;
			$j=1;
		}
		echo date('d',$i)." \t ";
		$j++;
	}
//*****************************************************************    удаление дубликатов в массиве $arr
$arr=['fst','snd','thd','frd','snd','thd'];
	$arr_temp=[];
	print_r($arr);
	foreach($arr as $key=>$value){
		if(!(in_array($value,$arr_temp)))
			$arr_temp[]=$value;
	}
	$arr=$arr_temp;
	unset($arr_temp);
	print_r($arr);
//*****************************************************************    меняем местами две переменные int без третьей переменной
$x=4;
	$y=6;
	echo "$x    $y".PHP_EOL;
	$x+=$y;
	echo "$x    $y".PHP_EOL;
	$y=$x-$y;
	echo "$x    $y".PHP_EOL;
	$x-=$y;
	echo "$x    $y".PHP_EOL;
//*****************************************************************    пузырьковая сортировка массива случайных элементов
$arr=[];
    $arr_size=mt_rand(5,10);
    for ($i = 0; $i < $arr_size; $i++) {
        $arr[$i]=mt_rand(0,100);
    }
    print_r($arr).PHP_EOL;
    
    for ($i = $arr_size-1; $i >=0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            if ($arr[$j]>$arr[$j+1]) {
                list($arr[$j],$arr[$j+1])=[$arr[$j+1],$arr[$j]];
            }
        }
    }
