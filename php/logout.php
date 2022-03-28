<?php

session_start();
session_unset();
session_destroy();
header("location:\Loli-Search/index.php");