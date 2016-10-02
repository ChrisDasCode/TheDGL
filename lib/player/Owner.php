<?php
namespace lib\player;

/**
 * @Project: DGL
 * @Author: DasCode (dascodegit@gmail.com)
 * @Date: 9/28/2016
 */
require 'Admin.php';

class Owner extends Admin
{
    public function __construct()
    {
        parent::__construct();
        $this->setRank("Owner");
    }

}