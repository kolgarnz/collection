<?php
namespace Collection;

class Collection implements \ArrayAccess
{
    private $_container = array();

    public function __construct()
    {
        $this->_container = array();
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->_container[] = $value;
        } else {
            $this->_container[$offset] = $value;
        }
    }

    public function offsetExists($offset)
    {
        return isset($this->_container[$offset]);
    }

    public function offsetUnset($offset)
    {
        unset($this->_container[$offset]);
    }

    public function offsetGet($offset)
    {
        return isset($this->_container[$offset]) ? $this->_container[$offset] : null;
    }
}
