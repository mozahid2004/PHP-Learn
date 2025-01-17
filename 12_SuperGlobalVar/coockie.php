<?php
$_cookie_name = "user";
$_cookie_value = "Mozahid Izhar";

setcookie($_cookie_name, $_cookie_value, time() + (86400), "/");
?>

<html>

<body>
  <?php
  // Check if the cookie exists
  if (isset($_COOKIE["user"])) {
    // Access the cookie value
    echo "Cookie Name: " . $_COOKIE["user"];
  } else {
    echo "Cookie is not set.";
  }
  ?>

</body>

</html>