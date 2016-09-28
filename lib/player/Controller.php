<?php
/**
 * @Project: DGL
 * @Author: DasCode (dascodegit@gmail.com)
 * @Date: 9/27/2016
 */
require '../database/Connector.php'; //Lets me use the amazing RedBeanPHP ORM
require '../utils/Security.php';
require '../utils/Time.php';
require 'Owner.php'; //Get's all Player type classes with one easy import

class PlayerController
{
    private $playerList = array();

    /**
     * PlayerController constructor.
     */
    public function __construct()
    {


    }

    /**
     * @param $userName
     * @param $userPassword
     * @param $userEmail
     * @param $steamAcc
     * @param $name
     * @param $rank
     * @return int|string
     */
    public function CreateUser($userName, $userPassword, $userEmail, $steamAcc, $name, $rank)
    {
        $t = new Time();
        $timeNow = $t->timeNow();
        // Creates a User Object
        $tempUser = new Player();
        $tempUser->setUserName(htmlspecialchars($userName));
        $tempUser->setUserPass(htmlspecialchars($userPassword));
        $tempUser->setUserEmail(htmlspecialchars($userEmail));
        $tempUser->setSteamAcc(htmlspecialchars($steamAcc));
        $tempUser->setPlayerName(htmlspecialchars($name));
        $tempUser->setRank(htmlspecialchars($rank));
        $tempUser->setIsBanned(false);
        $tempUser->setHasVacBan(false); // TODO: Add the ability to look this up based on the steamAcc
        $tempUser->setGamesPlayed(0);
        $tempUser->setWins(0);
        $tempUser->setLosses(0);
        // Ghetto way to store said user object. //TODO: Less ghetto pl0x
        $storageUser = R::dispense("users");
        $storageUser->userName = htmlspecialchars($userName);
        $storageUser->userPassword = hashPass(htmlspecialchars($userName), htmlspecialchars($userPassword), $timeNow);
        $storageUser->userEmail = htmlspecialchars($userEmail);
        $storageUser->steamAcc = htmlspecialchars($steamAcc);
        $storageUser->playerName = htmlspecialchars($name);
        $storageUser->Rank = htmlspecialchars($rank);
        $storageUser->isBanned = false;
        $storageUser->isVacBanned = false; // TODO: Add the ability to look this up based on the steamAcc
        $storageUser->gamesPlayed = 0;
        $storageUser->wins = 0;
        $storageUser->losses = 0;
        $storageUser->registerd = $timeNow;
        $userID = R::store($storageUser);
        return $userID;
    }

}
