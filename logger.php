<?php

use Monolog\Logger;
use Monolog\Handler\BrowserConsoleHandler;

// Create a log chanel
$log = new Logger('my_logger');

$log->pushHandler(new BrowserConsoleHandler(Logger::DEBUG));

// You can now use your logger
$log->info('My logger is now ready');