<?php
namespace DesignPatterns\Creational\FactoryMethod;

abstract class FactoryMethod
{
    const PHP = 'php';
    const JS = 'js';

    /**
     * @param string $type
     * @return BookInterface
     */
    abstract protected function createBook(string $type): BookInterface;

    /**
     * @param string $type
     * @return BookInterface
     */
    public function create(string $type): BookInterface
    {
        return $this->createBook($type);
    }
}