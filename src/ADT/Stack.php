<?php

namespace Braddle\ADT;

class Stack
{
    private $size = 0;
    private $value = [];

    public function isEmpty()
    {
        return $this->size === 0;
    }

    public function push(string $string)
    {
        $this->value[$this->size];
        $this->size++;
    }

    public function size(): int
    {
        return -1;
    }

    public function pop()
    {
        $this->size--;
        return $this->value[$this->size];
    }
}