<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/15
 * Time: 16:25
 */

namespace fake;


abstract class SqlGenerator {
    protected $data;
    protected $table;

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param mixed $table
     */
    public function setTable($table)
    {
        $this->table = $table;
    }
    public function __construct($table,$data){
        $this->table = $table;
        $this->data = $data;
    }
    public abstract function generatorSql();
} 