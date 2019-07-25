<?php
require __DIR__ . '/vendor/autoload.php';

use Openbuildings\Spiderling\Page;

$page = new Page();


$page->visit('https://www.lazada.vn/dien-thoai-di-dong/?spm=a2o4n.home.cate_1.1.19056afe6QnAdy');
$result=[];
$title = $page->find('title');
$result[]= $title->text() . "\n";
$meta = $page->find('meta[name="description"]');
$content=$meta->attribute('content')."\n";
$result[]=$content;

$arr= preg_split('/ /', $content);
$result[]= array_count_values($arr);
return($result);