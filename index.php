<?php 
$age = 20;

$sentence = $age >= 21 ? "Welcome to the bar here's a bottle" : "Sorry you are not 21 and you can't drink";

switch ($age) {
    case $age >= 21:
      echo "Welcome to the bar here's a bottle";
      break;
    case $age >= 18 && $age < 21:
      echo "Welcome to the bar you can chill but can't drink";
      break;
    default:
      echo "Sorry you are not 21 and you can't drink";
  }
  
// if($age >= 21) {
//     echo "Welcome to the bar here's a bottle";
// } else if($age >= 18 && $age < 21) {
// echo "Welcome to the bar you can chill but can't drink";
// }
//  else {
//     echo "Sorry you are not 21 and you can't drink";
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thank God</h1>
    <h1><?php echo $sentence; ?></h1>
</body>
</html>