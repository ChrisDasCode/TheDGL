<?php
namespace lib\database;
/**
 * @Project: DGL
 * @Author: DasCode (dascodegit@gmail.com)
 * @Date: 9/28/2016
 */
require 'rb.php';


class Connector
{

    /**
     * Connector constructor.
     */
    public function __construct()
    {
        R::setup(); // This code creates a test database in your /tmp folder. Of course, this is meant for testing purposes only
        //R::setup( 'mysql:host=localhost;dbname=mydatabase','user', 'password' ); //for both mysql or mariaDB
        // R::setup( 'pgsql:host=localhost;dbname=mydatabase','user', 'password' );//for PostgreSQL Db's
        // R::setup( 'sqlite:/tmp/dbfile.db' ); //for SQLite Db's
        // R::setup('cubrid:host=localhost;port=30000;dbname=mydatabase','user','password');//for CUBRID Db's
        R::setAutoResolve(TRUE);// Recommended as of version 4.2
    }

    /**
     * @param $table
     * @return array
     */
    public function GrabAll($table)
    {
        return R::findAll($table);
    }

    /**
     * connector destructor
     */
    public function __destruct()
    {
        R::close();
    }


}

