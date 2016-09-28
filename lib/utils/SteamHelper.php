<?php
/**
 * @Project: steamID-lookup
 * @Author: amreuland (amreuland@gmail.com) https://github.com/amreuland
 * @Date: 1/14/2013
 */
function convert_steamid_community($steamid)
{
    $id1 = substr(str_ireplace("STEAM_0:", "", $steamid), 2) * 2;
    $id2 = substr(str_ireplace("STEAM_0:", "", $steamid), 0, 1);
    $id = bcadd($id1 + $id2, '76561197960265728');
    return ($id);
}

/**
 * @param $communityid
 * @return string
 */
function get_steamid_community($communityid)
{
    $id1 = bcsub($communityid, '76561197960265728');
    $id = bcdiv($id1, '2');
    if (bcmod($id1, '2')) {
        $steamid = 'STEAM_0:1:' . $id;
    } else {
        $steamid = "STEAM_0:0:" . $id;
    }
    return ($steamid);
}

/**
 * @param $steamid
 * @return string
 */
function buildSteamURL($steamid)
{
    if (stristr($steamid, "STEAM_0:")):
        $steam32 = $steamid;
        $steam = convert_steamid_community($steamid);
        $steam64 = $steam;
        $xmlf = "http://steamcommunity.com/profiles/$steam?xml=1";
    elseif ($steamid > 76561197960265728):
        $steam = $steamid;
        $steam64 = $steamid;
        $xmlf = "http://steamcommunity.com/profiles/$steam?xml=1";
    elseif (stristr($steamid, "http://steamcommunity.com/id/")):
        $steam = str_ireplace("http://steamcommunity.com/id/", "", $steamid);
        $xmlf = "http://steamcommunity.com/id/$steam?xml=1";
    elseif (stristr($steamid, "http://steamcommunity.com/profiles/")):
        $steam = str_ireplace("http://steamcommunity.com/profiles/", "", $steamid);
        $xmlf = "http://steamcommunity.com/profiles/$steam?xml=1";
    else:
        $steam = $steamid;
        $xmlf = "http://steamcommunity.com/id/$steam?xml=1";
    endif;
    return $xmlf;
}