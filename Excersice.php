<?php
require __DIR__ . '/vendor/autoload.php';
use Openbuildings\Spiderling\Page;
$page = new Page();
$link = readline("link : ");


class array_sort
{
    protected $_asort;

    public function __construct(array $asort)
    {
        $this->_asort = $asort;
    }

    public function alhsort()
    {
        $sorted = $this->_asort;
        krsort($sorted);
        for($i=0; $i<10; $i++){
            $popularword[]=$sorted[$i];
        }
        return $popularword;
    }
}
try {
    $page->visit($link);
    $result = [];
    $title = $page->find('title');
    $result[] = $title->text() . "\n";
    $meta = $page->find('meta[name="description"]');
    $content = $meta->attribute('content') . "\n";
    $result[] = $content;

    $arr = preg_split('/ /', $content);
    $count = array_count_values($arr);

    //khoi tao doi tuong moi
    $sortarray = new array_sort($arr);

    $a[]=($sortarray->alhsort());
    foreach ($a as $value){
        $result[]=$value;
    }
    return ($result);
} catch (Exception $e) {
    echo "Link fail !!! "."\n";
    echo "please write link website again ...."."\n";
}


