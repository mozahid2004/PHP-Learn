<!-- $_FILES -->

<html>
  <body>
      <form action="" method="POST" enctype="multipart/form-data">
      <input type="file" name="image"><br/><br/>
      <input type="submit">
      </form>
    
  </body>
</html>

<?php
  if(isset($_FILES['image'])){
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    echo $file_name."<br/>";

    if(move_uploaded_file($file_tmp, "../upload-image/".$file_name)){
      echo "SuccessFully Uploaded";
    }else{
      echo "Could not Upload File";
    }

  }
?>