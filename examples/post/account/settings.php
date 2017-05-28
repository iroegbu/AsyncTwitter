<?php declare(strict_types=1);

namespace PeeHaa\AsyncTwitter\Examples\Post\Account;

use PeeHaa\AsyncTwitter\Api\Request\Post\Account\Settings;

require_once __DIR__ . '/../../../vendor/autoload.php';

$apiClient = require __DIR__ . '/../../create-client.php';

$request = (new Settings())
    ->enableSleepTime()
    ->sleepTimeStart(5)
    ->sleepTimeEnd(9)
    ->timeZone('Europe/Copenhagen')
    ->trendLocationWoeId(1)
    ->language('en')
;

\Amp\wait($result = $apiClient->request($request));

$request = (new Settings())
    ->disableSleepTime()
    ->sleepTimeStart(5)
    ->sleepTimeEnd(9)
    ->timeZone('Europe/Copenhagen')
    ->trendLocationWoeId(1)
    ->language('en')
;

\Amp\wait($result = $apiClient->request($request));
