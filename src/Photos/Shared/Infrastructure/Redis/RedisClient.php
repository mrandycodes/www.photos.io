<?php
declare(strict_types=1);


namespace App\Photos\Shared\Infrastructure\Redis;

use Predis\Client;

final class RedisClient
{
    const REDIS_CONNECTION = [
      'host' => 'redis',
      'port' => '6379'
    ];
    private $redis;

    public function __construct()
    {
        $this->redis = new Client(self::REDIS_CONNECTION);

    }

    public function get($key)
    {
        return $this->redis->get($key);
    }

    public function set($key, $value)
    {
        return $this->redis->set($key,$value);
    }

}