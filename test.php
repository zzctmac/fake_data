<?php
header('Content-Type:text/html;charset=utf-8');
include './vendor/autoload.php';
$sex_data = array(
    array('m',1232),
    array('w',1)
);
$config = array(
    array('Dtt', 'Time', null),
    array('LoginId', 'Conster', 138),
    array('TotalFee', 'Conster', 100),
    array('DeliveryAddr', 'Conster', '在线购买代金券'),
    array('DeliveryName', 'RandString', 10),
    array('DeliveryCellphone', 'Conster', '13401920122'),
    array('ExpireDtt', 'Conster', strtotime("+1 week")),
    array('BuyerProductOrderId', "Num", array(10,100))

);
$table = 'T_Product_Order_Saler';
$faker = new \fake\FakeData($table, $config);
for($i = 0; $i < 50; $i++) {
    echo $faker->fake()."<br />";
}
/*$data_generator = new \fake\DataGenerator($config);

$data = $data_generator->generate();

var_dump($data);

$mysql_r = new \fake\MysqlGenerator('xxx', $data);

echo $mysql_r->generatorSql();*/