<?php
class ArraySort
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
