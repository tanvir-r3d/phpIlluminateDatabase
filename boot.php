<?php

require __DIR__.'/config.php';
require __DIR__.'/vendor/autoload.php';
use App\Model\Database;

new Database();

require __DIR__.'/query.php';