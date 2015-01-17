<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/15
 * Time: 16:00
 */

class RandStringTest extends PHPUnit_Framework_TestCase {
    public function testString(){
        $randString = new fake\RandString(100);
        echo $randString->getData();
    }
}
 