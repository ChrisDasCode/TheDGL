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
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     * @return Player
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserPass()
    {
        return $this->userPass;
    }

    /**
     * @param mixed $userPass
     * @return Player
     */
    public function setUserPass($userPass)
    {
        $this->userPass = $userPass;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @param mixed $userEmail
     * @return Player
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSteamAcc()
    {
        return $this->steamAcc;
    }

    /**
     * @param mixed $steamAcc
     * @return Player
     */
    public function setSteamAcc($steamAcc)
    {
        $this->steamAcc = $steamAcc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsBanned()
    {
        return $this->isBanned;
    }

    /**
     * @param mixed $isBanned
     * @return Player
     */
    public function setIsBanned($isBanned)
    {
        $this->isBanned = $isBanned;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @param mixed $rank
     * @return Player
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
        return $this;
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
     * @return Player
     */
    public function setWins($wins)
    {
        $this->wins = $wins;
        return $this;
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
     * @return Player
     */
    public function setLosses($losses)
    {
        $this->losses = $losses;
        return $this;
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
     * @return Player
     */
    public function setGamesPlayed($gamesPlayed)
    {
        $this->gamesPlayed = $gamesPlayed;
        return $this;
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
     * @return Player
     */
    public function setPlayerName($playerName)
    {
        $this->playerName = $playerName;
        return $this;
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
     * @return Player
     */
    public function setHasUploadedDemo($hasUploadedDemo)
    {
        $this->hasUploadedDemo = $hasUploadedDemo;
        return $this;
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
     * @return Player
     */
    public function setHasVacBan($hasVacBan)
    {
        $this->hasVacBan = $hasVacBan;
        return $this;
    }

    /**
     * @return boolean
     */
    public function canTalk()
    {
        return $this->CAN_TALK;
    }


}