<?php
/**
 * @Project: DGL
 * @Author: DasCode (dascodegit@gmail.com)
 * @Date: 9/28/2016
 */
require 'Captain.php';

class Mod extends Captain
{
    public function __construct()
    {
        parent::__construct();
        $this->setRank("Mod");
    }
}