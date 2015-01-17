<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/15
 * Time: 16:11
 */

namespace fake;


class DataGenerator {

    /**
     * @var
     * array(
    array(
     *    'name', 'rule', config(mix)
     * )
     * )
     */
    private $config;

    function __construct($config)
    {
        $this->config = $config;
    }

    public function generate(){
        $data = array();
        foreach($this->config as $v){
            $class_name = "fake\\{$v[1]}";
            $ruler = new $class_name($v[2]);
            $data[$v[0]] = $ruler->getData();
        }
        return $data;
    }


} 