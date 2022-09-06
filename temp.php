$fname=0;
	$options = array('options'=>array('regexp'=>'/[а-яёА-Я]{2,20}/'));
	//filter_var('В',FILTER_VALIDATE_REGEXP,$options) ? $fname=1 : $fname=0;
	
	filter_var('ВикторВикторВикторВиктор', FILTER_VALIDATE_REGEXP,array('options'=>array('regexp'=>'/[а-яё]{3,20}/iu'))) ? $fname=1 : $fname=0;
	echo $fname;
