<?php
namespace Phi\Traits;


Trait ArrayAccess
{

    protected $arrayAccessValues = [];

    public function offsetExists($offset)
    {
        return array_key_exists($this->arrayAccessValues, $offset);
    }

    public function offsetGet($offset)
    {
        return $this->arrayAccessValues[$offset];
    }

    public function offsetSet($offset, $value)
    {
        if ($offset === null) {
            $this->arrayAccessValues[] = $value;
        } else {
            $this->arrayAccessValues[$offset] = $value;
        }

        return $this;
    }


    public function offsetUnset($offset)
    {
        unset($this->arrayAccessValues[$offset]);
        return $this;
    }


}