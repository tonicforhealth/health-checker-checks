<?php

namespace TonicHealthCheck\Check\ActiveMQ\ConnectOldClient;

use Stomp\Stomp;
use Stomp\Exception\StompException;
use TonicHealthCheck\Check\ActiveMQ\AbstractActiveMQCheck;

/**
 * Class ActiveMQConnectCheck.
 */
class ActiveMQConnectCheck extends AbstractActiveMQCheck
{
    const CHECK = 'activemq-connect-performCheck';

    const TEST_DESTINATION = '/queue/test';
    const TEST_BODY = 'test';
    const TEST_TIME_OUT = 10;

    /**
     * @var Stomp
     */
    protected $client;

    /**
     * @param string $checkNode
     * @param Stomp  $client
     */
    public function __construct($checkNode, $client)
    {
        parent::__construct($checkNode);
        $this->setClient($client);
    }

    /**
     * Check PactiveMQClient can to connect to activeMQ server.
     *
     * @throws ActiveMQConnectCheckException
     */
    public function performCheck()
    {
        try {
            $this->getClient()->connect();
        } catch (StompException $e) {
            throw  ActiveMQConnectCheckException::connectProblem($e);
        }
    }

    /**
     * @return Stomp
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Stomp $client
     */
    protected function setClient(Stomp $client)
    {
        $this->client = $client;
    }
}
