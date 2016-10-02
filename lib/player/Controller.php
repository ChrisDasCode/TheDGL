<?php
namespace lib\player;

/**
 * @Project: DGL
 * @Author: DasCode (dascodegit@gmail.com)
 * @Date: 9/27/2016
 */
include('../database/Connector.php'); //Lets me use the amazing RedBeanPHP ORM
require '../utils/Security.php';
require '../utils/Time.php';
require 'Owner.php'; //Get's all Player type classes with one easy import
//require 'rb.php';

class PlayerController
{
    private $playerList = array();

    /**
     * PlayerController constructor.
     */
    public function __construct()
    {
        R::setup();
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

    /**
     * @param $userName
     */
    public function RemoveUser($userName)
    {
        $id = $this->GetID($userName);
        $userBeingRemoved = R::load("users", $id);
        R::trash($userBeingRemoved);
    }

    /**
     * @param $userName
     * @return int 0 if user not found
     */
    public function GetID($userName)
    {
        $c = new Connector();
        $users = $c->GrabAll("users");
        for ($i = 0; $i < count($users); $i++) {
            if ($users['userName'][$i] == htmlspecialchars($userName)) {
                return $i;
            }
        }
        return 0;
    }

    /**
     * Converts ORM's beans to Objects
     */
    public function MakeObjects()
    {
        $c = new Connector();
        $this->playerList = array();
        $users = $c->GrabAll("users");
        for ($i = 0; $i < count($users); $i++) {
            switch ($users['Rank'][$i]) {
                case "Owner":
                    $tmpO = new Owner();
                    $tmpO->setUserName($users['userName'][$i]);
                    $tmpO->setUserPass($users['userPassword'][$i]);
                    $tmpO->setPlayerName($users['playerName'][$i]);
                    $tmpO->setUserEmail($users['userEmail'][$i]);
                    $tmpO->setSteamAcc($users['steamAcc'][$i]);
                    $tmpO->setRank($users['Rank'][$i]);
                    $tmpO->setGamesPlayed($users['gamesPlayed'][$i]);
                    $tmpO->setWins($users['wins'][$i]);
                    $tmpO->setLosses($users['losses'][$i]);
                    $tmpO->setHasVacBan($users['isVacBanned'][$i]);
                    array_push($this->playerList, $tmpO);
                    break;
                case "Admin":
                    $ad = new Admin();
                    $ad->setUserName($users['userName'][$i]);
                    $ad->setUserPass($users['userPassword'][$i]);
                    $ad->setPlayerName($users['playerName'][$i]);
                    $ad->setUserEmail($users['userEmail'][$i]);
                    $ad->setSteamAcc($users['steamAcc'][$i]);
                    $ad->setRank($users['Rank'][$i]);
                    $ad->setGamesPlayed($users['gamesPlayed'][$i]);
                    $ad->setWins($users['wins'][$i]);
                    $ad->setLosses($users['losses'][$i]);
                    $ad->setHasVacBan($users['isVacBanned'][$i]);
                    array_push($this->playerList, $ad);
                    break;
                case "Mod":
                    $md = new Mod();
                    $md->setUserName($users['userName'][$i]);
                    $md->setUserPass($users['userPassword'][$i]);
                    $md->setPlayerName($users['playerName'][$i]);
                    $md->setUserEmail($users['userEmail'][$i]);
                    $md->setSteamAcc($users['steamAcc'][$i]);
                    $md->setRank($users['Rank'][$i]);
                    $md->setGamesPlayed($users['gamesPlayed'][$i]);
                    $md->setWins($users['wins'][$i]);
                    $md->setLosses($users['losses'][$i]);
                    $md->setHasVacBan($users['isVacBanned'][$i]);
                    array_push($this->playerList, $md);
                    break;
                case "Captain":
                    $capt = new Captain();
                    $capt->setUserName($users['userName'][$i]);
                    $capt->setUserPass($users['userPassword'][$i]);
                    $capt->setPlayerName($users['playerName'][$i]);
                    $capt->setUserEmail($users['userEmail'][$i]);
                    $capt->setSteamAcc($users['steamAcc'][$i]);
                    $capt->setRank($users['Rank'][$i]);
                    $capt->setGamesPlayed($users['gamesPlayed'][$i]);
                    $capt->setWins($users['wins'][$i]);
                    $capt->setLosses($users['losses'][$i]);
                    $capt->setHasVacBan($users['isVacBanned'][$i]);
                    array_push($this->playerList, $capt);
                    break;
                case "Officer":
                    $off = new Officer();
                    $off->setUserName($users['userName'][$i]);
                    $off->setUserPass($users['userPassword'][$i]);
                    $off->setPlayerName($users['playerName'][$i]);
                    $off->setUserEmail($users['userEmail'][$i]);
                    $off->setSteamAcc($users['steamAcc'][$i]);
                    $off->setRank($users['Rank'][$i]);
                    $off->setGamesPlayed($users['gamesPlayed'][$i]);
                    $off->setWins($users['wins'][$i]);
                    $off->setLosses($users['losses'][$i]);
                    $off->setHasVacBan($users['isVacBanned'][$i]);
                    array_push($this->playerList, $off);
                    break;
                default:
                    $pl = new Player();
                    $pl->setUserName($users['userName'][$i]);
                    $pl->setUserPass($users['userPassword'][$i]);
                    $pl->setPlayerName($users['playerName'][$i]);
                    $pl->setUserEmail($users['userEmail'][$i]);
                    $pl->setSteamAcc($users['steamAcc'][$i]);
                    $pl->setRank($users['Rank'][$i]);
                    $pl->setGamesPlayed($users['gamesPlayed'][$i]);
                    $pl->setWins($users['wins'][$i]);
                    $pl->setLosses($users['losses'][$i]);
                    $pl->setHasVacBan($users['isVacBanned'][$i]);
                    array_push($this->playerList, $pl);
                    break;
            }
        }
    }

}
