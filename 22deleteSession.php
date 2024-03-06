<?php

session_start();

session_unset();

session_destroy(); // this is how u can destoyed the session

echo "Session has been destroyed!";
?>
