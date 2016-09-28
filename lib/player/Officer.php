<?php
/**
 * @Project: DGL
 * @Author: DasCode (dascodegit@gmail.com)
 * @Date: 9/27/2016
 */
require 'Player.php';

class Officer extends Player
{
    /**
     * Officer constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setCanTalk();
        $this->setRank("Officer");
    }


}