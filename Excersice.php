<?php
require __DIR__ . '/vendor/autoload.php';

use Openbuildings\Spiderling\Page;

$page = new Page();

$link = readline("link : ");
$page->visit($link);
$result = [];
$title = $page->find('title');
$result[] = $title->text() . "\n";
$meta = $page->find('meta[name="description"]');
$content = $meta->attribute('content') . "\n";
$result[] = $content;

$arr = preg_split('/ /', $content);
$count = array_count_values($arr);

krsort($arr);
for ($i = 0; $i < 10; $i++) {
    $result[] = $arr[$i] . "\n";
}
return $result;