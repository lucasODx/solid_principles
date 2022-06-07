<?php

class MysqlConnection
{
    public function connect()
    {
        //
    }
}

class PageLoader
{
    private $dbConnection;

    public function __construct(MysqlConnection $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}