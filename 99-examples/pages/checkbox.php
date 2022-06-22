<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="" method="post">
Select your personality attributes:<br />
<input type="checkbox" name="attributes[]" value="perky" /> Perky<br />
<input type="checkbox" name="attributes[]" value="morose" /> Morose<br />
<input type="checkbox" name="attributes[]" value="thinking" />
Thinking<br />
<input type="checkbox" name="attributes[]" value="feeling" /> Feeling<br
/>
<input type="checkbox" name="attributes[]" value="thrifty" />Spendthrift<br />
<input type="checkbox" name="attributes[]" value="shopper" /> Shopper<br
/>
<br />
<input type="submit" name="s" value="Record my personality!" />
</form>
<?php

  if (isset($_POST['s'])) {
    $description = join (' ', $_POST['attributes']);
    echo "You have a {$description} personality.";
  }
?>
</body>
</html>