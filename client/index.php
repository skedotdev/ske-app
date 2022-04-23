<?php

$ske = require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'ske.php';

$ske->runNewApp($ske->getEnv('SERVER_NAME'), $ske->getEnv('APP_MODE'), SYS_DIR . '/app/web/public');
