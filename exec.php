<?php
    if(!empty($_POST)){
        $file=fopen("list.txt","r");
        $i=1;
        if($file){
            while(($str=fgets($file))!==FALSE){
                //echo 'checkbox{$i} '.$_POST['fcheckbox{$i}'];
                echo "<input type='checkbox' name='fcheckbox{$i}' value='{$i}' checked>{$str}<br>";
                echo '<br>';
                $i++;
            }
        }
    }
?>