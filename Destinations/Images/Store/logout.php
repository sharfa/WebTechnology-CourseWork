<?php
session_start();
session_destroy();
echo "<a href='login.php'>Log back in</a>";