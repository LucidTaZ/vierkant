<?php

namespace lucidtaz\vierkant;

use InvalidArgumentException;

class Vierkant
{
    private $length;

    public function __construct($length) {
        if ($length < 0) {
            throw new InvalidArgumentException('Length cannot be negative.');
        }
        $this->length = $length;
    }

    public function getLength() {
        return $this->length;
    }

    public function getArea() {
        return $this->length * $this->length;
    }
}
