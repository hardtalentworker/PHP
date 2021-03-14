  <?php
    $filename = '1620.png';
    $percent = 0.5;

    // тип содержимого
    header('Content-Type: image/png');

    // получение новых размеров
    list($width, $height) = getimagesize($filename);
    $new_width = $width * $percent;
    $new_height = $height * $percent;

    // ресэмплирование
    $image_p = imagecreatetruecolor($new_width, $new_height);
    $image = imagecreatefrompng($filename);
    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

    // вывод
    imagepng($image_p,NULL,5);
    ?>