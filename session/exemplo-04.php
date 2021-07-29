<?php

session_id('26qds4k7q1lpa0sgeg2dqijgtu');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>