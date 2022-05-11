<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strings Functions</title>
  </head>
  <body>
    <?php

    $first = "The quick brown fox";
    $second = " jumped over the lazy dog.";

    $third = $first;
    $third .= $second;
    echo $third;
   ?>
   <br>
   Lovercase: <?php echo strtolower($third); ?><br>
   Uppercase: <?php echo strtoupper($third); ?><br>
   Uppercase first: <?php echo ucfirst($third); ?><br>
   Uppercase words: <?php echo ucwords($third); ?><br>
   <br>
   Length: <?php echo strlen($third); ?><br>
   Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br>
   Find: <?php echo strstr($third, "brown"); ?><br>
      Replace by String: <?php echo str_replace("quick", "superfast", $third); ?><br>
<br><br>
   Repeat: <?php echo str_repeat($third, 2); ?><br>
   Make substring: <?php echo substr($third, 5, 10); ?><br>
   Find position: <?php echo strpos($third, "brown"); ?><br>
   Find Character: <?php echo strchr($third, "z"); ?><br>

   
  </body>
</html>
