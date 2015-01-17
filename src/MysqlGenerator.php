<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/15
 * Time: 16:26
 */

namespace fake;


class MysqlGenerator extends SqlGenerator{

    public function generatorSql()
    {
        $sql = 'insert into ' . $this->table;
        $keys = array_keys($this->data);
        $key_str = ' ('.implode(',', $keys).')';
        $sql .= $key_str . ' values ';
        $sql .= self::handleValues($this->data).';';
        return $sql;

    }

    public static function handleValues($data){
        $sql = '';
        $v = array_shift($data);
        $sql .= self::handleValue($v);
        foreach($data as $v){
            $sql .= ',' . self::handleValue($v);
        }
        $sql = '(' . $sql .')';
        return $sql;
    }

    public static function handleValue($value){
        if(is_string($value))
            return "'" . $value ."'";
        if(is_int($value) || is_float($value) || is_long($value))
            return $value;
    }
}