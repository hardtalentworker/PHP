<?php
    function file_refresh($file,array $param,$num_uni){ //$file - файл $param - массив $num_uni - номер уникального элемента
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
            }
        }
        
        $handle = fopen($file, 'w');
        fputcsv($handle,$arr_temp,";");
        fclose($handle);
        
        unset($data);
        unset($arr_temp);
    }
?>
