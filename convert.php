<?php

require __DIR__ . '/vendor/autoload.php';

use Overtrue\Pinyin\Pinyin;

$pinyin = new Pinyin('Overtrue\Pinyin\MemoryFileDictLoader');

$input = $argv[1];

$result = $pinyin->permalink($input);

echo $result;
?>

