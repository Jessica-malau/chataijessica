<?php
session_start();
session_destroy();
header("Location: auth.php"); // Kembali ke halaman login
exit;
?>
