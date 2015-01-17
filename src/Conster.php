<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/15
 * Time: 16:13
 */

namespace fake;


class Conster implements Rule{
    private $data;

    function __construct($data)
    {
        $this->data = $data;
    }


    public function getData()
    {
        return $this->data;
    }


} 