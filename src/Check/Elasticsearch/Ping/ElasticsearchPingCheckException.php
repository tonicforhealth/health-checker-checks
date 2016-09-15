<?php

namespace TonicHealthCheck\Check\Elasticsearch\Ping;

use TonicHealthCheck\Check\Elasticsearch\ElasticsearchCheckException;

/**
 * Class ElasticsearchPingCheckException.
 */
class ElasticsearchPingCheckException extends ElasticsearchCheckException
{
    const EXCEPTION_NAME = 'ElasticsearchPingCheck';

    const CODE_PING_FAILED = 5003;
    const TEXT_PING_FAILED = 'Elasticsearch ping failed for hosts:%s';

    /**
     *
     *
     *
     * @return self
     */
    public static function pingFailed($host)
    {
        return new self(sprintf(self::TEXT_PING_FAILED, $host), self::CODE_PING_FAILED);
    }
}
