<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/15
 * Time: 16:51
 */

namespace fake;


class FakeDataExecer extends FakeDataDecorator{
    private $pdo = null;
    public function __construct(\PDO $pdo){
        $this->pdo = $pdo;
    }
    public function fake()
    {
        $sql = parent::fake();
        return $this->pdo->exec($sql);

    }


} 