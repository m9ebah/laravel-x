<?php

namespace Nawaf\LaravelX;
use Abraham\TwitterOAuth\TwitterOAuth;

class X
{

    protected $connection;

    public function __construct()
    {

        $this->connection = new TwitterOAuth(
            config('x.CONSUMER_KEY'),
            config('x.CONSUMER_SECRET'),
            config('x.ACCESS_TOKEN'),
            config('x.ACCESS_TOKEN_SECRET')
        );

    }

    public function __call(string $method, array $arguments)
    {
        if (method_exists($this->connection, $method)) {
            return $this->connection->{$method}(...$arguments);
        }
        return $this;
    }
}