<?php
namespace lib\player;
/**
 * @Project: DGL
 * @Author: DasCode (dascodegit@gmail.com)
 * @Date: 9/28/2016
 */
require 'Mod.php';

class Admin extends Mod
{
    public function __construct()
    {
        parent::__construct();
        $this->setRank("Admin");
    }
}