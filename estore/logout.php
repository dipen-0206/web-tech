<?php
session_start();    
session_destroy(); // clears or deletes all session data
header("Location: login.php");
exit();