<?php

/**
 * List of Appwrite Functions supported frameworks
 */

use Utopia\Config\Config;

$templateRuntimes = Config::getParam('template-runtimes');

return [
    'express' => [
        'key' => 'express',
        'name' => 'Express',
        // Node 16 and older can't preload the Open Runtimes server injection
        'runtimes' => \array_values(\array_diff($templateRuntimes['NODE'], ['node-14.5', 'node-16.0'])),
        'startCommand' => 'bash helpers/express/server.sh',
    ],
];
