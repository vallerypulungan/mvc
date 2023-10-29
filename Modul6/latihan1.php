<?php
setcookie("user", "Alex Porter", time()+3600);
?>
<?php
echo $_COOKIE["user"];
?>