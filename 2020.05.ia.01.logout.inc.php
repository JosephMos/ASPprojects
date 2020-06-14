<?php

session_start();
session_unset();
session_destroy();
header("Location: 2020.05.ia.01.login.index.php");
