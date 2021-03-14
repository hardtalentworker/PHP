<!DOCTYPE HTML>
<html lang="ru" dir="LTR" title="sample4" charset="utf-8">

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
    $array = array();
    $count=0;
    for ($i=0; $i <100 ; $i++) {
      $array[$i]=rand (1,5);
    }

    for ($i=0; $i <99 ; $i++) {
      if ($array[$i]==$array[$i+1]) {
        $count++;
      }
    }

    echo("<br>");
    var_dump($array);
    echo("<br>");
    echo($count);
    ?>
</body>

</html>