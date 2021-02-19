<?php
require('vendor/autoload.php');

require_once './generated-conf/config.php';

use App\Services\Site;

$site = new Site();
$site->run();
