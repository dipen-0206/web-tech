<?php

include 'header.php';
?>
<div class="content">
   <?php
   $user = $_SESSION['user'];
   echo "welcome $user";
?>
</div>

<?php
include 'footer.php';
?>