<?php

namespace Zumba\JsonSerializer\Test\SupportClasses;

class WildCardSerializer
{
    public function serialize($obj)
    {
        return array('fields' => 'alpha;beta');
    }

    public function unserialize($values)
    {
        $obj = new WildCardType();
        foreach(explode(';', $values['fields']) as $value){
            $obj->$value = strrev($value);
        }
        return $obj;
    }
}
