<?php
setcookie("email", "", time() - 3600, "/");
session_start();
session_unset();
session_destroy();
header("Location: form.php");
exit;
?>