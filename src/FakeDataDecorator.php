<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/15
 * Time: 16:45
 */

namespace fake;


class FakeDataDecorator implements Faker{
    private $faker;

    public function __construct(FakeData $faker){
        $this->faker = $faker;
    }
    public function fake()
    {
        return $this->faker->fake();
    }
}