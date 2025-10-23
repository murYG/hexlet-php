<?php

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

$tests[] = ['hello', 'Hello'];
$tests[] = ['', ''];
$tests[] = ['привет', 'Привет'];

foreach ($tests as $test) {
	$result = StringUtils\capitalize($test[0]);
	if ($result !== $test[1]) {
		throw new \Exception("Функция работает неверно!\nОжидание: $test[1]\nРеальность: $result\n");
	}
}

echo "Все тесты пройдены!\n";