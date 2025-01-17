<!-- Super Global Variable -->
<!--  there are 7 types of Super Global Variable
   $_GET
   $_POST
   $_REQUEST
   $_SERVER
   $_SESSION
   $_COOKIE
   $_FILES
  -->

<!-- GET and POST mostly Use in Form -->
<html>

<head>

</head>

<body>
   <center>
      <form action="test.php" method="post">
         Name : <input name="name" type="text" autocomplete="off"><br /><br />
         Age : <input name="age" type="text"><br /><br />
         <input type="submit" name="save">
      </form>
   </center>

   <!-- <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
         Name : <input name="name" type="text" autocomplete="off"><br /><br />
         Age : <input name="age" type="text"><br /><br />
         <input type="submit" name="save2">
      </form>

      <?php
      $name = $_REQUEST['name'];
      $age = $_REQUEST['age'];
      if(isset($_POST['save2'])){
         echo "$name <br/>";
         echo "$age<br/>";

      }

      ?> -->
</body>

</html>