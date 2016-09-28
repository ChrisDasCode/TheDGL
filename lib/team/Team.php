<?php
/**
 * @Project: DGL
 * @Author: DasCode (dascodegit@gmail.com)
 * @Date: 9/27/2016
 */
require '../Player/Player.php'; //Go back a directory then go to /Player/ ;)

class Team
{
    private $teamName, $teamCaptain, $wins, $losses, $gamesPlayed, $teamSize;

    /**
     * Team constructor.
     * @param $teamCaptain
     * @param $teamSize
     */
    public function __construct(Player $teamCaptain, $teamSize)
    {
        $this->teamCaptain = $teamCaptain;
        $this->teamSize = $teamSize;
    }

    public function removeWin()
    {
        $win = $this->wins--;
        $this->wins = $win;
    }

    public function removeLoss()
    {
        $loss = $this->losses--;
        $this->losses = $loss;
    }

    public function setLoss()
    {
        $losses = $this->losses + 1;
        $this->losses = $losses;
    }

    /**
     * @return mixed
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * @param mixed $teamName
     */
    public function setTeamName($teamName)
    {
        $this->teamName = $teamName;
    }

    /**
     * @return Player
     */
    public function getTeamCaptain()
    {
        return $this->teamCaptain;
    }

    /**
     * @param Player $teamCaptain
     */
    public function setTeamCaptain($teamCaptain)
    {
        $this->teamCaptain = $teamCaptain;
    }

    /**
     * @return mixed
     */
    public function getWins()
    {
        return $this->wins;
    }

    /**
     * @param mixed $wins
     */
    public function setWins($wins)
    {
        $this->wins = $wins;
    }

    /**
     * @return mixed
     */
    public function getLosses()
    {
        return $this->losses;
    }

    /**
     * @param mixed $losses
     */
    public function setLosses($losses)
    {
        $this->losses = $losses;
    }

    /**
     * @return mixed
     */
    public function getGamesPlayed()
    {
        return $this->gamesPlayed;
    }

    /**
     * @param mixed $gamesPlayed
     */
    public function setGamesPlayed($gamesPlayed)
    {
        $this->gamesPlayed = $gamesPlayed;
    }

    /**
     * @return mixed
     */
    public function getTeamSize()
    {
        return $this->teamSize;
    }

    /**
     * @param mixed $teamSize
     */
    public function setTeamSize($teamSize)
    {
        $this->teamSize = $teamSize;
    }




}