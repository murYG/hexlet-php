<?php

require_once __DIR__ . '/vendor/autoload.php';

// Файл не включается напрямую
// Он загрузится автоматически благодаря автозагрузке
use My\Project\Runner;

print_r(Runner\run());
