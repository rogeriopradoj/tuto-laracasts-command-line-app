<?php
/**
 * Created by PhpStorm.
 * User: rogerio
 * Date: 25/04/17
 * Time: 11:02
 */

namespace Acme;

use PDO;


class DatabaseAdapter
{
    protected $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function fetchAll($tableName)
    {
        return $this->connection->query('select * from ' . $tableName)->fetchAll();
    }

    public function query($sql, $parameters)
    {
        return $this->connection->prepare($sql)->execute($parameters);
    }
}