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
    private $storageUser;
    private $c;
    /**
     * PlayerController constructor.
     */
    public function __construct()
    {
        $this->c = new Connector();
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
        $this->storageUser = R::dispense("users");
        $this->storageUser->userName = htmlspecialchars($userName);
        $this->storageUser->userPassword = hashPass(htmlspecialchars($userName), htmlspecialchars($userPassword), $timeNow);
        $this->storageUser->userEmail = htmlspecialchars($userEmail);
        $this->storageUser->steamAcc = htmlspecialchars($steamAcc);
        $this->storageUser->playerName = htmlspecialchars($name);
        $this->storageUser->Rank = htmlspecialchars($rank);
        $this->storageUser->isBanned = false;
        $this->storageUser->isVacBanned = false; // TODO: Add the ability to look this up based on the steamAcc
        $this->storageUser->gamesPlayed = 0;
        $this->storageUser->wins = 0;
        $this->storageUser->losses = 0;
        $this->storageUser->registerd = $timeNow;
        $userID = R::store($this->storageUser);
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
        $users = $this->c->GrabAll("users");
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
        $this->playerList = array();
        $users = $this->c->GrabAll("users");
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
