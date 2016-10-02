<?php
namespace lib\utils;

/**
 * @Project: DGL
 * @Author: DasCode (dascodegit@gmail.com)
 * @Date: 9/28/2016
 */

/**
 * @param $userName
 * @param $password
 * @return bool|string
 */
function hashPass($userName, $password, $timeNow)
{
    $options = [
        'salt' => hash('haval128,3', $userName . $timeNow)
    ];
    return password_hash($password, PASSWORD_DEFAULT, $options);
}