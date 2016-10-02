<?php
namespace lib\utils;
/**
 * @Project: DGL
 * @Author: DasCode (dascodegit@gmail.com)
 * @Date: 9/28/2016
 */
class Time
{

    /**
     * Time constructor.
     */
    public function __construct()
    {
        date_default_timezone_set("US/Eastern");
    }

    public static function stimeNow()
    {
        date_default_timezone_set("US/Eastern");
        return date("Y-m-d H:i:s");
    }

    /**
     * @return false|string
     */
    public function timeNow()
    {
        return date("Y-m-d H:i:s");
    }

}