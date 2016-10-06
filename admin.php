<?php
// Read the text file
$handle = fopen("total.txt", "r");
$current_total = fgets($handle);

if(isset($_POST['submit']))
{
  file_put_contents("total.txt",$_POST['newtotal']);
  fclose($handle);
  echo '<h1>Thank you, your total of &pound;' . $_POST['newtotal'] . ' has been updated</h1>';
}

?>
<!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="utf-8">
 		<meta http-equiv="X-UA-Compatible" content="IE=edge">
 		<title>Totaliser Admin</title>
 		<meta name="HandheldFriendly" content="true" />
 		<meta name="MobileOptimized" content="320" />
 		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
 		<link rel="stylesheet" type="text/css" href="style.css">
 	</head>
 	<body>
    <div class="container">

      <div class="row">
        <div class="twelve columns">
          <h1>Admin page</h1>
          <p>Please enter the new amount <strong>without</strong> the &pound; sign.</p>

          <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
            <input type="text" name="newtotal" placeholder="<?= $current_total ?>" />
            <input type="submit" name="submit" value="Submit your new figure" />
          </form>
        </div>
      </div>
    </div>


 	</body>
 </html>
