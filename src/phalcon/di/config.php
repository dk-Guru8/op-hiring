<?php

$config = new \Phalcon\Config;
foreach ([ 'app', getenv('ENV') ] as $conf) {
    $conf = sprintf('%s/config/%s.yml', APP_PATH, $conf);
    if (file_exists($conf)) {
        $config->merge(new Phalcon\Config\Adapter\Yaml($conf,[
            "!ENV" => function($value) {
                return getenv($value);
            },
        ]));
    }
}

return $config;