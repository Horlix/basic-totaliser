<?php
// Read the text file
$handle = fopen("total.txt", "r");
$current_total = fgets($handle);
// Set your total
$target_total = 1000;
$percent = 0;

if ($current_total == ''){
  $current_total = 0.00;
} else {
  $percent = ($current_total/$target_total)*100;

  if ($percent > 100){
    $percent = 100;
  }
}

fclose($handle);
?>

<!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="utf-8">
 		<meta http-equiv="X-UA-Compatible" content="IE=edge">
 		<title>Totaliser</title>
 		<meta name="HandheldFriendly" content="true" />
 		<meta name="MobileOptimized" content="320" />
 		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
 		<link rel="stylesheet" type="text/css" href="style.css">
 	</head>
 	<body>
    <div class="container">

      <div class="row">
        <div class="twelve columns">
          <h1>We have currently raised &pound;<?= $current_total ?>!</h1>
        </div>
      </div>

      <div class="row">
        <div class="twelve columns">
          <div class="one column">
            &pound;0
          </div>
          <div class="ten columns">
            <div id="totalbar" style="width:<?= $percent ?>%">&nbsp;</div>
          </div>
          <div class="one column">
            &pound;<?= $target_total ?>
          </div>
        </div>
      </div>

    </div>

 	</body>
 </html>
