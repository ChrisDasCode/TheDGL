<?php

/**
 * @Project: DGL
 * @Author: DasCode (dascodegit@gmail.com)
 * @Date: 9/27/2016
 */
class TeamController
{
    private $playersList, $teamsList;

    /**
     * TeamController constructor.
     * @param $playersList
     */
    public function __construct($playersList)
    {
        $this->playersList = $playersList;
    }

    /**
     * @return Array
     */
    public function getTeamsList()
    {
        return $this->teamsList;
    }

    /**
     * @param String array $teamsList
     */
    public function setTeamsList(array $teamsList)
    {
        $this->teamsList = $teamsList;
    }

    /**
     * @param String $team
     */
    public function addTeamToList($team)
    {
        array_push($this->teamsList, $team);
    }


}