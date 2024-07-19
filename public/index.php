<?php

require_once(dirname(__FILE__) ."/../src/config/config.php");
require_once(dirname(__FILE__) ."/../src/models/User.php");

$user = new User(['name' => 'Lucas', 'email'=> 'lucas@gmail.com',]);
print_r($user);

