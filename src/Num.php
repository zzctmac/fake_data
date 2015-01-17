<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/15
 * Time: 15:13
 */

namespace fake;


class Num implements Rule{
    private $_range;

    function __construct($range)
    {
        $this->_range = $range;
    }

    public function getData()
    {
        return mt_rand($this->_range[0], $this->_range[1]);
    }
}