<?php
namespace Phi\Traits;


use Phi\Core\Exception;

Trait ArrayAccess
{

    private $arrayAccessValues = [];

    public function offsetExists($offset)
    {
        return array_key_exists($this->arrayAccessValues, $offset);
    }

    public function offsetGet($offset)
    {
        if(array_key_exists($offset, $this->arrayAccessValues)) {
            return $this->arrayAccessValues[$offset];
        }
        else {
            throw new Exception('Key ['.$offset.'] does not exists');
            return null;
        }

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

    public function getAll()
    {
        return $this->arrayAccessValues;
    }


}