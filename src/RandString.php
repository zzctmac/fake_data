<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/15
 * Time: 15:55
 */

namespace fake;


class RandString implements Rule{
    public static $str = '01234567892398473485abcedhksdhaldjaldjADHSFGRSasjkadhkhjksdhfksdjfkjsefalkjwdskjdfhkjawdhskjfdhasefhsjkfhs01234567892398473485abcedhksdhaldjaldjADHSFGRSasjkadhkhjksdhfksdjfkjsefalkjwdskjdfhkjawdhskjfdhasefhsjkfhs01234567892398473485abcedhksdhaldjaldjADHSFGRSasjkadhkhjksdhfksdjfkjsefalkjwdskjdfhkjawdhskjfdhasefhsjkfhsaekjfjakdeesajkhdfeshdjskaedfsaakjdakjdealkwqawjaksdheflkajsdajdwfksejhesskd01234567892398473485abcedhksdhaldjaldjADHSFGRSasjka01234567892398473485abcedhksdhaldjaldjADHSFGRSasjkadhkhjksdhfksdjfkjsefalkjwdskjdfhkjawdhskjfdhasefhsjkfhsaekjfjakdeesajkhdfeshdjskaedfsaakjdakjdealkwqawjaksdheflkajsdajdwfksejhesskddhkhjksdhfksdjfkjsefalkjwdskjdfhkjawdhskjfdhasefhsjkfhsaekjfjakdeesajkhdfeshdjskaedfsaakjdakjdealkwqawjaksdheflkajsdajdwfksej';
    private $_num;
    function __construct($num)
    {
        $this->_num = $num;
    }

    public function getData(){
        return substr(str_shuffle(self::$str), 0, $this->_num);
    }
}