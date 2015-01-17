<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/15
 * Time: 16:03
 */

namespace fake;


class Time implements Rule{
    private $type;
    private $data;

    function __construct($type = null, $data=null)
    {
        $this->type = $type;
        $this->data = $data;
    }

    public function getData()
    {
        if($this->type == null)
            return time();
        elseif(is_string($this->type))
            return strtotime($this->data);
            return false;
    }
}