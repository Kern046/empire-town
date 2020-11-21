<?php

require_once('./fileloader.php');

use App\Town;

$town = Town\init([
    ROLE_GOVERNOR => 1,
    ROLE_MERCHANT => 3,
    ROLE_PEASANT => 20,
], 500);

var_dump($town);

//Town\run($town);
