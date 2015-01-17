<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/15
 * Time: 15:27
 */

class CollectionTest extends PHPUnit_Framework_TestCase {

    public function testCollection(){
        $config = array(
            array(1,1),
            array(3,5),
            array(5,10)
        );
        $collection = new \fake\Collection($config);
       // $this->assertEquals(5,$collection->getData());
        $arr = array(1=>0,3=>0,5=>0);
        for($i = 0; $i < 10000;$i++) {
            $time = $collection->getData();
            $arr[$time]++;
        }
        print_r($arr);
    }
}
 