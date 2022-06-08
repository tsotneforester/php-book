<?php
		if(isset($_FILES['uploaded_file'])) {
    $errors = array();
    $maxsize  = 209453;
    $acceptable = array(
        'application/pdf',
        'image/jpeg',
        'image/jpg',
        'image/gif',
        'image/png'
    );

    if(($_FILES['uploaded_file']['size'] >= $maxsize) || ($_FILES["uploaded_file"]["size"] == 0)) {
        $errors[] = 'File too large. File must be less than 2 megabytes.';
    }

    if((!in_array($_FILES['uploaded_file']['type'], $acceptable)) && (!empty($_FILES["uploaded_file"]["type"]))) {
        $errors[] = 'Invalid file type. Only PDF, JPG, GIF and PNG types are accepted.';
    }

    if(count($errors) === 0) {

        $directory_name = "vault";
        if (!is_dir($directory_name)) {
          mkdir($directory_name);       
      }
        $image_name = $_FILES['uploaded_file']['name'];
        $image_tmp_name= $_FILES['uploaded_file']['tmp_name'];
        move_uploaded_file($_FILES['uploaded_file']['tmp_name'], "$directory_name/$image_name");
     



   
    } else {
        foreach($errors as $error) {
            echo '<script>alert("'.$error.'");</script>';
        }

        die(); //Ensure no more processing is done
    }
}
		
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
  <form action="" method="post" enctype="multipart/form-data">
   <input type="file" name="uploaded_file" id="uploaded_file" >
   <input type="submit" value="submit" name="submit">

  </form>
</body>
</html>