<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Associative Arrays</title>
  </head>

<?php $assoc = array("first_name" => "Alberto", "last_name" => "Boschini"); ?>
<?php echo $assoc["first_name"]; ?> <br />
<?php echo $assoc["first_name"] . " " . $assoc["last_name"];?> <br />

<?php $assoc["first_name"] = "Jose"; ?>
<?php echo $assoc["first_name"] . " " . $assoc["last_name"];?> <br />


  <body>
  </body>
</html>
