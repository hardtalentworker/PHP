<!DOCTYPE HTML>
<html lang="ru" dir="LTR" title="learn" charset="utf-8">

<head>
    <title>learn</title>
    <meta http-equiv="pragma" content="no-cache">
    <link href="main.css" rel="stylesheet"  media="screen" type="text/css"/>
    <link href="print.css" rel="stylesheet"  media="print" type="text/css"/>
    <script defer="defer" type="text/javascript" src="main.js">
    </script>
</head>

<body>
	<?php
  //Данная задача зависит от кодировки. Также при точном соблюдении 180 символов может обрезаться последнее слово
    $a="
В переменной лежит текст новости. В переменной лежит ссылка на страницу с полным текстом этой новости.
Нужно в переменную записать сокращенный текст новости по правилам:
- обрезать до 180 символов
- приписать многоточие
- последние 2 слова и многоточие сделать ссылкой на полный текст новости.
Какие проблемы вы видите в решении этой задачи? Что может пойти не так?
Результат: ссылка на репозиторий с кодом и ваши комментарии.";
    $link="http://tradebenefit.ru/peremennie-php-i-sposobi-vivoda";
    $b=mb_substr($a,0,mb_strpos($a,' ',179));

    var_dump($a);
    echo("<br>");
    echo("<br>");
    $b=mb_substr($b,0,mb_strlen(mb_strrichr(mb_strrichr($b," ",true)," ",true)))."<a href=$link>".mb_substr($b,mb_strlen(mb_strrichr(mb_strrichr($b," ",true)," ",true)))."...</a>";
    echo($b);
	?>
</body>

</html>