<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/15
 * Time: 15:15
 */

namespace fake;


class Collection implements Rule{
    /**
     * @var $config
     * like
     * array(
     *  array('abc', 1)  0--->data 1--->weight
     * )
     */
    private $_config;


    function __construct($config)
    {
        $this->_config = $config;
    }

    public function getData()
    {
        $datas = array();
        $weights = array();
        $weight_count = 0;
        foreach($this->_config as $k=>$v){
            $weight_count += $v[1];
            foreach(range(0, $v[1]) as $times)
                $weights[] = $k;
            $datas[$k] = $v[0];
        }
        $num = mt_rand(0,$weight_count);
        return $datas[$weights[$num]];
    }
}