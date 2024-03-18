<?php
session_start();

// Encerra a sessão
session_unset();
session_destroy();

header("Location: index.php");
exit();
?>
