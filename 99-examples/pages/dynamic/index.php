<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="root/jquery.min.js"></script>
	<script src="root/bootstrap.min.js"></script>
	<link rel="stylesheet" href="root/bootstrap.min.css">
	<script src="root/javascript/index.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">


</head>
<div class="grid">
  <div class="itemhead">
   <h2>HEADER</h2>
  </div>
	<div class="item1">


		<h6>SIDE</h6>
		<ul>
			<li><a href="index.php"><i class="fas fa-birthday-cake"></i> Dashboard</a> </li>
			<li><a href="index.php?PageName=Categories"><i class="fas fa-birthday-cake"></i> Categories</a> </li>
			<li><a href="index.php?PageName=Comments"><i class="fas fa-birthday-cake"></i> Comments</a> </li>

		</ul>

	</div>
	<div class="item2">
		<!-- content -->
    <?
     if (!empty($_GET['PageName'])) {
       $PageName = $_GET['PageName'];
			 $Folder = scandir("pages", 1);
			 unset($Folder[3],$Folder[4]);
			 print_r($Folder);
			 if (in_array($PageName . ".php", $Folder)) {
			 include("pages" . "/" . $PageName . ".php");
			 }
           else {
           	echo "Yo are Lost...";
           }


     }  else {
     	include("pages/Dashboard.php");
     }

		?>



		<!-- content end -->
	</div>
  <div class="itemfooter">
    <h2>FOOTER</h2>
  </div>
</div>

</body>

</html>
