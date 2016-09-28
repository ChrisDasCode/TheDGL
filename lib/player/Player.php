<?php
/**
 * @Project: DGL
 * @Author: DasCode (dascodegit@gmail.com)
 * @Date: 9/27/2016
 */
class Player
{
    private $wins, $losses, $gamesPlayed, $playerName, $hasUploadedDemo, $hasVacBan;
    private $CAN_TALK = false;

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
    public function getPlayerName()
    {
        return $this->playerName;
    }

    /**
     * @param mixed $playerName
     */
    public function setPlayerName($playerName)
    {
        $this->playerName = $playerName;
    }

    /**
     * @return mixed
     */
    public function getHasUploadedDemo()
    {
        return $this->hasUploadedDemo;
    }

    /**
     * @param mixed $hasUploadedDemo
     */
    public function setHasUploadedDemo($hasUploadedDemo)
    {
        $this->hasUploadedDemo = $hasUploadedDemo;
    }

    /**
     * @return mixed
     */
    public function getHasVacBan()
    {
        return $this->hasVacBan;
    }

    /**
     * @param mixed $hasVacBan
     */
    public function setHasVacBan($hasVacBan)
    {
        $this->hasVacBan = $hasVacBan;
    }

    /**
     * @return boolean
     */
    public function canTalk()
    {
        return $this->CAN_TALK;
    }

    /**
     * @param boolean $CAN_TALK
     */
    public function setCanTalk()
    {
        $this->CAN_TALK = true;
    }



}