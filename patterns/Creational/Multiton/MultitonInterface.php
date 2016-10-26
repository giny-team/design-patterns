<?php
namespace DesignPatterns\Creational\Multiton;

use DesignPatterns\Creational\Singleton\SingletonInterface;

interface MultitonInterface
{
    /**
     * @param string $instanceName
     * @return SingletonInterface
     */
    public static function getInstance(string $instanceName): SingletonInterface;

    public function __construct();

    public function __clone();

    public function __wakeup();
}
