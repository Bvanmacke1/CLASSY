<?php


namespace App;


class PageConfig
{
    private $method;
    private $args;

    public function __construct(array $config)
 {
     $this->method = $config['method'];
     $this->args = $config['args'];
 }

    public function getArgs()
    {
        return $this->args;
    }

    public function getMethod()
    {
        return $this->method;
    }
}