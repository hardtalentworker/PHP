<?php
<<<<<<< HEAD
    function file_refresh($file,array $param,$num_uni){ //$file - ôàéë $param - ìàññèâ $num_uni - íîìåð óíèêàëüíîãî ýëåìåíòà
=======
    function file_refresh($file,array $param,$num_uni){ //$file - Ñ„Ð°Ð¹Ð» $param - Ð¼Ð°ÑÑÐ¸Ð² $num_uni - Ð½Ð¾Ð¼ÐµÑ€ ÑƒÐ½Ð¸ÐºÐ°Ð»ÑŒÐ½Ð¾Ð³Ð¾ ÑÐ»ÐµÐ¼ÐµÐ½Ñ‚Ð°
>>>>>>> 62faf0326aeae39215a945463b712eee6299f731
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