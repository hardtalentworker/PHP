<!DOCTYPE HTML>
<html lang="ru" dir="LTR" title="sample2" charset="utf-8">

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
    ini_set('memory_limit', '3096M');
    $filename = "20000.png";

    // получение новых размеров
    list($width, $height) = getimagesize($filename);
    $new_width = 200;
    $new_height = 100;

    // ресэмплирование
    $image_p = imagecreatetruecolor($new_width, $new_height);
    $image = imagecreatefrompng($filename);
    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

    // вывод
    imagepng($image_p,"20000_.png",9);
  ?>
  <br>
  <img src="20000_.png">
</body>

</html>