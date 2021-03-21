<?php
//Поиск вхождения наибольшей общей подстроки
$a = "Привет, Миротворец";
$b = "Мир, труд, май";
$tempOut="";
$i=0;
$j=0;

for($j=0;$j<strlen($b);$j++){
    //echo($j);
    $temp="";
    for($i=$j;$i<strlen($b);$i++){
        //echo($i);
        $temp=$temp.$b[$i];
        //echo($temp.PHP_EOL);
        if((strpos($a,$temp)>0)and(strlen($tempOut)<strlen($temp))){
            echo(strpos($a,$temp)." ".strlen($tempOut)." ".strlen($temp).PHP_EOL);
            $tempOut=$temp;
        }
    }
}

echo($tempOut);