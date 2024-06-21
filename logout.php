<?php
session_start();
include "koneksi.php";

unset($_SESSION['username']);  
unset($_SESSION['userid']); 
unset($_SESSION['expire']);
?>
<script>
window.top.location.href = "index.php"; 
</script>
<?php


?>