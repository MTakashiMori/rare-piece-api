<?php

namespace App\Constants;

use Exception;
use ReflectionClass;
use ReflectionException;

class BaseConstant
{
    /**
     * @return Exception|mixed|ReflectionException
     */
    public function getRandom()
    {
        try {
            $constants = new ReflectionClass($this);
            $key = array_rand($constants->getConstants());
            return constant(get_class($this) . '::' . $key);
        } catch (ReflectionException $e) {
            return $e;
        }
    }

    /**
     * @return array|Exception|ReflectionException
     */
    public function returnArray()
    {
        try {
            $constants = new ReflectionClass($this);
            return $constants->getConstants();
        } catch (ReflectionException $e) {
            return $e;
        }
    }
}