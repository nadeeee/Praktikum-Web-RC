<?php
require_once('app/User.php');

$user = new User();
$user->authenticate($_POST['uname'], $_POST['pass']);
