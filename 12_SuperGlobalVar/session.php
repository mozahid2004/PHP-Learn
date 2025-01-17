<!-- 
 step1 session_start();
 step2 $_SESSION[name] = value;
 step3 echo $_SESSION[name];
-->

<?php
  session_start();

  $_SESSION["favcolor"] = "Red";

  echo "Session Variable is set";

?>