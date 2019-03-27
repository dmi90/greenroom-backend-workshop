<?php

/**
 * Class QueryBuilder
 *
 * Creates queries
 * Needs a PDO instance
 */
class QueryBuilder
{
    public $pdo;

    /**
     * QueryBuilder constructor
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @param $table
     * @param $className
     * @return array
     *
     * Selects all rows from a given table and maps them to an array of classes defined
     */
    public function selectAll($table, $className)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $className);
    }
}