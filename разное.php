<?php
    $x=1;
    $y=2;
    
    echo 'test\n'.PHP_EOL;
    echo date('d.m.Y H:i:s').PHP_EOL;
    echo date('d.m.Y H:i:s',time()+(7 * 24 * 60 * 60)-1).PHP_EOL;
    echo date('d.m.Y H:i:s',mktime(0, 0, 0, date('m'), date('d'), date('Y'))).PHP_EOL;
    echo date('d.m.Y H:i:s',mktime(0, 0, 0, date('m')+1, date('d'), date('Y'))).PHP_EOL;
    echo date('d.m.Y H:i:s',mktime(0, 0, 0, date('m'), date('d')+1, date('Y'))).PHP_EOL;
    echo date('d.m.Y H:i:s',mktime(0, 0, 0, date('m'), date('d'), date('Y')+1)).PHP_EOL;
    
    echo mt_getrandmax().PHP_EOL;
    echo mt_rand().PHP_EOL;
    echo mt_rand().PHP_EOL;
    echo mt_rand(10,100).PHP_EOL;
    echo mt_rand(10,100).PHP_EOL;
    
    echo "x=$x y={$y}\n";
    echo 'x=$x y=$y'.PHP_EOL;
    echo `dir`.PHP_EOL;
    
    echo intval('20',16).PHP_EOL;

	$var=0b1001;
	$var1='0b1001';
	$var2=42.43752;

	echo strval($var)."={$var}", PHP_EOL;
	echo sprintf('%08b', $var).PHP_EOL;
	echo $var1."={$var1}", PHP_EOL;

	echo $var2." ".round($var2,2).PHP_EOL;

	echo decbin(89080).PHP_EOL;
	echo bindec(10010).PHP_EOL;
    
    $sampleClass=new MainTest();
    $sampleClass->var=5;
    
    echo "test $sampleClass->var".PHP_EOL;
    echo MainTest::$staticvar.PHP_EOL;
    
    print("Hi".PHP_EOL);

	echo intval('00000000000000000000000000101101',2).PHP_EOL;
	echo intval('11111111111111111111111111010010',2).PHP_EOL;
	
	echo 45;
	echo " = ".decbin(45).PHP_EOL;
	echo ~45;
	echo " = ".decbin(-46).PHP_EOL;
	echo bindec(11111111111111111111111111010010).PHP_EOL;
	
	echo '4'==4;
	echo PHP_EOL;
	echo 4<=>4;
	echo PHP_EOL;
	echo 3<=>40;
	echo PHP_EOL;
	echo 50<=>4;
	echo PHP_EOL;
