<?php

/**
 * @Project: DGL
 * @Author: DasCode (dascodegit@gmail.com)
 * @Date: 9/27/2016
 */
class Player
{
    private $userName, $userPass, $userEmail, $steamAcc, $isBanned, $rank, $wins, $losses, $gamesPlayed, $playerName, $hasUploadedDemo, $hasVacBan;
    private $CAN_TALK = false;

    /**
     * Player constructor.
     */
    public function __construct()
    {
        $this->setRank("Player");
    }

    /**
     * @param string $rank
     * @return void
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     * @return void
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getUserPass()
    {
        return $this->userPass;
    }

    /**
     * @param string $userPass
     * @return void
     */
    public function setUserPass($userPass)
    {
        $this->userPass = $userPass;
    }

    /**
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @param string $userEmail
     * @return void
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    }

    /**
     * @return string
     */
    public function getSteamAcc()
    {
        return $this->steamAcc;
    }

    /**
     * @param string $steamAcc
     * @return void
     */
    public function setSteamAcc($steamAcc)
    {
        $this->steamAcc = $steamAcc;
    }

    /**
     * @return boolean
     */
    public function getIsBanned()
    {
        return $this->isBanned;
    }

    /**
     * @param boolean $isBanned
     * @return void
     */
    public function setIsBanned($isBanned)
    {
        $this->isBanned = $isBanned;
    }

    /**
     * @return string
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @return int
     */
    public function getWins()
    {
        return $this->wins;
    }

    /**
     * @param int $wins
     * @return void
     */
    public function setWins($wins)
    {
        $this->wins = $wins;
    }

    /**
     * @return int
     */
    public function getLosses()
    {
        return $this->losses;
    }

    /**
     * @param int $losses
     * @return void
     */
    public function setLosses($losses)
    {
        $this->losses = $losses;
    }

    /**
     * @return int
     */
    public function getGamesPlayed()
    {
        return $this->gamesPlayed;
    }

    /**
     * @param int $gamesPlayed
     * @return void
     */
    public function setGamesPlayed($gamesPlayed)
    {
        $this->gamesPlayed = $gamesPlayed;
    }

    /**
     * @return string
     */
    public function getPlayerName()
    {
        return $this->playerName;
    }

    /**
     * @param string $playerName
     * @return void
     */
    public function setPlayerName($playerName)
    {
        $this->playerName = $playerName;
    }

    /**
     * @return boolean
     */
    public function getHasUploadedDemo()
    {
        return $this->hasUploadedDemo;
    }

    /**
     * @param boolean $hasUploadedDemo
     * @return void
     */
    public function setHasUploadedDemo($hasUploadedDemo)
    {
        $this->hasUploadedDemo = $hasUploadedDemo;
    }

    /**
     * @return boolean
     */
    public function getHasVacBan()
    {
        return $this->hasVacBan;
    }

    /**
     * @param boolean $hasVacBan
     * @return void
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
     * @return void
     */
    public function setCanTalk()
    {
        $this->CAN_TALK = true;
    }


}