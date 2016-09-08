<?php

namespace TonicHealthCheck\Tests\Check\Redis;

use Predis\Client;

/**
 * Class PDOMock.
 *
 * @method string dump($key)
 * @method int expire($key, $seconds)
 * @method int expireat($key, $timestamp)
 * @method array keys($pattern)
 * @method int move($key, $db)
 * @method mixed object($subcommand, $key)
 * @method int persist($key)
 * @method int pexpire($key, $milliseconds)
 * @method int pexpireat($key, $timestamp)
 * @method int pttl($key)
 * @method string randomkey()
 * @method mixed rename($key, $target)
 * @method int renamenx($key, $target)
 * @method array scan($cursor, array $options = null)
 * @method array sort($key, array $options = null)
 * @method int ttl($key)
 * @method mixed type($key)
 * @method int append($key, $value)
 * @method int bitcount($key, $start = null, $end = null)
 * @method int bitop($operation, $destkey, $key)
 * @method int decr($key)
 * @method int decrby($key, $decrement)
 * @method int getbit($key, $offset)
 * @method string getrange($key, $start, $end)
 * @method string getset($key, $value)
 * @method int incr($key)
 * @method int incrby($key, $increment)
 * @method string incrbyfloat($key, $increment)
 * @method array mget(array $keys)
 * @method mixed mset(array $dictionary)
 * @method int msetnx(array $dictionary)
 * @method mixed psetex($key, $milliseconds, $value)
 * @method int setbit($key, $offset, $value)
 * @method int setex($key, $seconds, $value)
 * @method int setnx($key, $value)
 * @method int setrange($key, $offset, $value)
 * @method int strlen($key)
 * @method int hdel($key, array $fields)
 * @method int hexists($key, $field)
 * @method string hget($key, $field)
 * @method array hgetall($key)
 * @method int hincrby($key, $field, $increment)
 * @method string hincrbyfloat($key, $field, $increment)
 * @method array hkeys($key)
 * @method int hlen($key)
 * @method array hmget($key, array $fields)
 * @method mixed hmset($key, array $dictionary)
 * @method array hscan($key, $cursor, array $options = null)
 * @method int hset($key, $field, $value)
 * @method int hsetnx($key, $field, $value)
 * @method array hvals($key)
 * @method array blpop(array $keys, $timeout)
 * @method array brpop(array $keys, $timeout)
 * @method array brpoplpush($source, $destination, $timeout)
 * @method string lindex($key, $index)
 * @method int linsert($key, $whence, $pivot, $value)
 * @method int llen($key)
 * @method string lpop($key)
 * @method int lpush($key, array $values)
 * @method int lpushx($key, $value)
 * @method array lrange($key, $start, $stop)
 * @method int lrem($key, $count, $value)
 * @method mixed lset($key, $index, $value)
 * @method mixed ltrim($key, $start, $stop)
 * @method string rpop($key)
 * @method string rpoplpush($source, $destination)
 * @method int rpush($key, array $values)
 * @method int rpushx($key, $value)
 * @method int sadd($key, array $members)
 * @method int scard($key)
 * @method array sdiff(array $keys)
 * @method int sdiffstore($destination, array $keys)
 * @method array sinter(array $keys)
 * @method int sinterstore($destination, array $keys)
 * @method int sismember($key, $member)
 * @method array smembers($key)
 * @method int smove($source, $destination, $member)
 * @method string spop($key)
 * @method string srandmember($key, $count = null)
 * @method int srem($key, $member)
 * @method array sscan($key, $cursor, array $options = null)
 * @method array sunion(array $keys)
 * @method int sunionstore($destination, array $keys)
 * @method int zadd($key, array $membersAndScoresDictionary)
 * @method int zcard($key)
 * @method string zcount($key, $min, $max)
 * @method string zincrby($key, $increment, $member)
 * @method int zinterstore($destination, array $keys, array $options = null)
 * @method array zrange($key, $start, $stop, array $options = null)
 * @method array zrangebyscore($key, $min, $max, array $options = null)
 * @method int zrank($key, $member)
 * @method int zrem($key, $member)
 * @method int zremrangebyrank($key, $start, $stop)
 * @method int zremrangebyscore($key, $min, $max)
 * @method array zrevrange($key, $start, $stop, array $options = null)
 * @method array zrevrangebyscore($key, $min, $max, array $options = null)
 * @method int zrevrank($key, $member)
 * @method int zunionstore($destination, array $keys, array $options = null)
 * @method string zscore($key, $member)
 * @method array zscan($key, $cursor, array $options = null)
 * @method array zrangebylex($key, $start, $stop, array $options = null)
 * @method int zremrangebylex($key, $min, $max)
 * @method int zlexcount($key, $min, $max)
 * @method int pfadd($key, array $elements)
 * @method mixed pfmerge($destinationKey, array $sourceKeys)
 * @method int pfcount(array $keys)
 * @method mixed pubsub($subcommand, $argument)
 * @method int publish($channel, $message)
 * @method mixed discard()
 * @method array exec()
 * @method mixed multi()
 * @method mixed unwatch()
 * @method mixed watch($key)
 * @method mixed eval($script, $numkeys, $keyOrArg1 = null, $keyOrArgN = null)
 * @method mixed evalsha($script, $numkeys, $keyOrArg1 = null, $keyOrArgN = null)
 * @method mixed script($subcommand, $argument = null)
 * @method mixed auth($password)
 * @method string echo ($message)
 * @method mixed ping($message = null)
 * @method mixed select($database)
 * @method mixed bgrewriteaof()
 * @method mixed bgsave()
 * @method mixed client($subcommand, $argument = null)
 * @method mixed config($subcommand, $argument = null)
 * @method int dbsize()
 * @method mixed flushall()
 * @method mixed flushdb()
 * @method array info($section = null)
 * @method int lastsave()
 * @method mixed save()
 * @method mixed slaveof($host, $port)
 * @method mixed slowlog($subcommand, $argument = null)
 * @method array time()
 * @method array command()
 */
class PredisClientMock extends Client
{
    private $resetUnexpected = false;

    private $saveArray = [];

    /**
     * @param string $key
     */
    public function get($key)
    {
        return isset($this->saveArray[$key]) ? $this->saveArray[$key] : null;
    }

    /**
     * @param string $key
     * @param string $value
     * @param null   $expireResolution
     * @param null   $expireTTL
     * @param null   $flag
     */
    public function set($key, $value, $expireResolution = null, $expireTTL = null, $flag = null)
    {
        if (!isset($this->saveArray[$key]) || !$this->resetUnexpected) {
            $this->saveArray[$key] = $value;
        }
    }

    /** @noinspection PhpHierarchyChecksInspection
     * @param array $key
     *
     * @return int|void
     */
    public function del($key)
    {
        unset($this->saveArray[$key]);
    }

    /**
     * @param string $key
     *
     * @return bool
     */
    public function exists($key)
    {
        return isset($this->saveArray[$key]);
    }

    /**
     * @return bool
     */
    public function isResetUnexpected()
    {
        return $this->resetUnexpected;
    }

    /**
     */
    public function setResetUnexpectedOn()
    {
        $this->resetUnexpected = true;
    }

    /**
     */
    public function setResetUnexpectedOff()
    {
        $this->resetUnexpected = false;
    }
}
