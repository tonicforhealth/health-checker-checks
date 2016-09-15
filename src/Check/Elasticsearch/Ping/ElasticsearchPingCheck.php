<?php

namespace TonicHealthCheck\Check\Elasticsearch\Ping;

use Elasticsearch\Client as ElasticsearchClient;
use Elasticsearch\Common\Exceptions\ElasticsearchException;
use Exception;
use TonicHealthCheck\Check\Elasticsearch\AbstractElasticsearchCheck;

/**
 * Class ElasticsearchPingCheck.
 */
class ElasticsearchPingCheck extends AbstractElasticsearchCheck
{
    const CHECK = 'elasticsearch-ping-check';

    /**
     * @var ElasticsearchClient
     */
    protected $client;

    /**
     * @var string
     */
    protected $index;

    /**
     * @param string              $checkNode
     * @param ElasticsearchClient $client
     */
    public function __construct($checkNode, ElasticsearchClient $client)
    {
        parent::__construct($checkNode);
        $this->setClient($client);
    }

    /**
     * Check elasticsearch client ping.
     *
     * @throws ElasticsearchPingCheckException
     * @throws Exception
     */
    public function performCheck()
    {
        try {
            if (!$this->getClient()->ping()) {
                throw ElasticsearchPingCheckException::pingFailed(
                    $this->getClient()->transport->lastConnection->getHost()
                );
            }
        } catch (Exception $e) {
            if (!$e instanceof ElasticsearchException) {
                throw $e;
            }
            throw ElasticsearchPingCheckException::internalGetProblem($e);
        }
    }

    /**
     * @return ElasticsearchClient
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param ElasticsearchClient $client
     */
    protected function setClient(ElasticsearchClient $client)
    {
        $this->client = $client;
    }
}
