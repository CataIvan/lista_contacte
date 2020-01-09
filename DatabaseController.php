<?php

/**
 * Class DatabaseController
 * Database controller is responsible for database connections.
 * Database controller is using singleton design pattern.
 */
class DatabaseController
{

    protected $dbHost = 'localhost';
    protected $dbDatabase = 'lista_contacte';
    protected $dbUsername = 'root';
    protected $dbPassword = '';


    /**
     * Connect to database with PDO
     */
    public function connect()
    {

    }


    public function getInstance()
    {

    }
}