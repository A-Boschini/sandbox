<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Floating Point Numbers</title>
  </head>
  <body>
<?php echo $float = 3.14; ?><br />
<?php echo $float + 7; ?><br />
<?php echo 4/3; ?><br />
<br />
<?php echo round($float, 1);?><br />
<?php echo ceil($float);  ?><br />
 <?php echo floor($float);   ?><br />
<br>
<?php $integer = 3; ?>

<?php echo "Is {$integer} integer? " . is_int($integer); ?><br>
<?php echo "Is {$float} integer? " . is_int($float); ?><br>
<br />
<?php echo "Is {$ineger} float? " . is_float($integer); ?><br>
<?php echo "Is {$float} float? " . is_float($float); ?><br>
<br />
<?php echo "Is {$ineger} integer? " . is_int($integer); ?><br>
<?php echo "Is {$float} integer? " . is_int($float); ?><br>
<br />
  </body>
</html>
