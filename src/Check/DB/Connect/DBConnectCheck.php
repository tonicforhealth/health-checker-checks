<?php

namespace TonicHealthCheck\Check\DB\Connect;

use PDO;
use TonicHealthCheck\Check\DB\AbstractDBCheck;
use TonicHealthCheck\Check\DB\PDOFactory;

/**
 * Class DBConnectCheck.
 */
class DBConnectCheck extends AbstractDBCheck
{
    const CHECK = 'db-connect-check';

    /**
     * @var PDOFactory
     */
    protected $PDOFactory;

    /**
     * @param string     $checkNode
     * @param PDOFactory $PDOFactory
     */
    public function __construct($checkNode, PDOFactory $PDOFactory)
    {
        $this->setPDOFactory($PDOFactory);
        parent::__construct($checkNode);
    }

    /**
     * Check PDO can to connect to $dsn address.
     *
     * @return void
     *
     * @throws DBConnectCheckException
     */
    public function performCheck()
    {
        try {
            $this->getPDOInstance();
        } catch (\PDOException $e) {
            throw new DBConnectCheckException($e->getMessage(), $e->getCode(), $e);
        }
    }
}
