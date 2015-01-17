<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/15
 * Time: 16:08
 */

namespace fake;


class FakeData implements Faker{
    private $table;
    /**
     * @var
     * array(
        array(
     *    'name', 'rule', config(mix)
     * )
     * )
     */
    private $config;
    private $data_generator;
    private $sql_generator;


    public function __construct($table, $config){
        $this->table = $table;
        $this->config = $config;
        $this->data_generator = new DataGenerator($config);
        $this->sql_generator = new MysqlGenerator($table, null);
    }

    public function generateData(){
        return $this->data_generator->generate();
    }

    public function generateSql($data){
        return $this->sql_generator->setData($data)->generatorSql();
    }

    public function fake(){
        return $this->generateSql($this->generateData());
    }
} 