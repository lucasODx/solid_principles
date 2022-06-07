<?php

// Criando uma interface connection você permite que várias classes se conectem usando
// métodos próprios sem atrapalhar a inserção de novas

interface Connection
{
    public function connect();
}

class MysqlConnection implements Connection
{
    public function connect()
    {
        // connecting to mysql
    }
}

class PostgresqlConnection implements Connection
{
    public function connect()
    {
        // connecting to postgres
    }
}


class PageLoader
{

    public function __construct(Connection $dbConnection)
    {
        $dbConnection->connect();
    }
}

$mysql = new MysqlConnection();
$postgresql = new PostgresqlConnection();

$pageLoader = new PageLoader($mysql);
$pageLoader2 = new PageLoader($postgresql);