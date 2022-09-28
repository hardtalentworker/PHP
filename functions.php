<?php
//***************************************************************** возведение числа $number в степень $exp
  function($number=1,$exp=1){ 
  	$result=$number;
  	for($i=1;$i<$exp;$i++){
  		$result*=$number;
	  }
	  return ($result);
 }
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
	$arr_count=mt_rand(5,10);
	for($i=0;$i<$arr_count;$i++){
		$arr[$i]=mt_rand(0,100);
	}
	
	for($i=$arr_count-1;$i>=0;$i--){
		for($j=0;$j<$i;$j++){
			$arr[$j]>$arr[$j+1] ? list($arr[$j],$arr[$j+1])=[$arr[$j+1],$arr[$j]] : '';
		}
	}
//*****************************************************************    чёт (false) / нечет (true)
	function odd($n){
		(($n%2)==0) ? $temp=false : $temp=true;
		return $temp;
	}
//*****************************************************************    сложение неопределённого количества чисел. sum(n1,n2,n3,n4,n5)
	function sum(...$n){
		$temp=0;
		foreach($n as $key=>$value)
			$temp+=(int)$value;
		return $temp;
	}
//*****************************************************************    преобразование арабских цифр в римские до трёх знаков
	function arab_to_rome(){
		$fin=[];
		$middle="";
		$arr=[1=>'I',
				5=>'V',
				10=>'X',
				50=>'L',
				100=>'C',
				500=>'D',
				1000=>'M'];
		
		$x=2606;
		echo $x.PHP_EOL;
		
		if($x>=1){
			switch($x%10){
				case 1:
					$middle=$middle."I";
					break;
				case 2:
					$middle=$middle."II";
					break;
				case 3:
					$middle=$middle."III";
					break;
				case 4:
					$middle=$middle."IV";
					break;
				case 5:
					$middle=$middle."V";
					break;
				case 6:
					$middle=$middle."VI";
					break;
				case 7:
					$middle=$middle."VII";
					break;
				case 8:
					$middle=$middle."VIII";
					break;
				case 9:
					$middle=$middle."IX";
					break;
			};
			$x/=10;
			//echo $middle.PHP_EOL;
			//echo $x.PHP_EOL;
			$fin[]=$middle;
			$middle="";
		};
		
		if($x>=1){
			switch($x%10){
				case 1:
					$middle=$middle."X";
					break;
				case 2:
					$middle=$middle."XX";
					break;
				case 3:
					$middle=$middle."XXX";
					break;
				case 4:
					$middle=$middle."XL";
					break;
				case 5:
					$middle=$middle."L";
					break;
				case 6:
					$middle=$middle."LX";
					break;
				case 7:
					$middle=$middle."LXX";
					break;
				case 8:
					$middle=$middle."LXXX";
					break;
				case 9:
					$middle=$middle."XC";
					break;
			};
		
			$x/=10;
			//echo $middle.PHP_EOL;
			//echo $x.PHP_EOL;
			$fin[]=$middle;
			$middle="";
		};
		
		if($x>=1){
			switch($x%10){
				case 1:
					$middle=$middle."C";
					break;
				case 2:
					$middle=$middle."CC";
					break;
				case 3:
					$middle=$middle."CCC";
					break;
				case 4:
					$middle=$middle."CD";
					break;
				case 5:
					$middle=$middle."D";
					break;
				case 6:
					$middle=$middle."DC";
					break;
				case 7:
					$middle=$middle."DCC";
					break;
				case 8:
					$middle=$middle."DCCC";
					break;
				case 9:
					$middle=$middle."CM";
					break;
			};
		
			$x/=10;
			//echo $middle.PHP_EOL;
			//echo $x.PHP_EOL;
			$fin[]=$middle;
			$middle="";
		};
		
		if($x>=1){
			switch($x%10){
				case 1:
					$middle=$middle."M";
					break;
				case 2:
					$middle=$middle."MM";
					break;
				case 3:
					$middle=$middle."MMM";
					break;
				case 4:
					$middle=$middle."MMMM";
					break;
				case 5:
					$middle=$middle."MMMMM";
					break;
			};
			
			$x/=10;
			//echo $middle.PHP_EOL;
			//echo $x.PHP_EOL;
			$fin[]=$middle;
			$middle="";
		};
	
		//print_r($fin);
		$fin=array_reverse($fin);
		//print_r($fin);
		//echo implode($fin);
		
		return implode($fin);
	}
//*****************************************************************    сохранение в файл массива из параметров с проверкой на уникальность
function file_refresh($file,array $param,$num_uni){ //$file - файл $param - массив $num_uni - номер уникального элемента
        $result=0; //такой уже есть
        $arr_temp=[];
        $i=0;
        
        if(($handle=fopen($file, "a+"))!== FALSE){
            while (($data = fgetcsv($handle, 1000, ";")) != null) {
                for ($j=0;$j<count($data);$j++) {
                    $arr_temp[$i]=$data[$j];
                    $i++;
                }
            }
            fclose($handle);
        }
        
        if(!in_array($param[$num_uni],$arr_temp)){
            for ($j=0;$j<count($param);$j++) {
                $arr_temp[$i]=$param[$j];
                $i++;
                $result=1; //успешно добавлен
            }
        }
        
        $handle = fopen($file, 'w');
        $ii=0;
        while($ii<$i){
            $arr_temp2=[];
            for ($j=0;$j<count($param);$j++) {
                $arr_temp2[$j]=$arr_temp[$ii];
                $ii++;
            }
            fputcsv($handle,$arr_temp2,";");
        }
        fclose($handle);
        
        unset($data);
        unset($arr_temp);
        
        return $result;
