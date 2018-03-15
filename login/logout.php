<?php
require_once 'core/init.php';

$user = new user();
$user->logOut();
redirect::to('index.php');