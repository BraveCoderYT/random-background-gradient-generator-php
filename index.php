<!-- Code by Brave Coder - https://youtube.com/BraveCoder -->

<?php

$deg = rand(000, 999);
$color1 = rand(000000, 999999);
$color2 = rand(000000, 999999);

$bg = "linear-gradient({$deg}deg, #{$color1}, #{$color2})";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
  <title>Random Gradient Generator - Brave Coder</title>
</head>
<body style="background: <?php echo $bg; ?>;">

  <a href="">Click Me</a>

</body>
</html>
