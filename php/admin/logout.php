<?php
session_start();
session_unset();
session_destroy();
unset($_SESSION['log']);
header("Location: login.php");
