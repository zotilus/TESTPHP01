<?php
class Collection
{

    private $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }


    public function get($key)
    {
        if (array_key_exists($key, $this->items)) {
            return $this->items[$key];
        } else {
            return false;
        }
    }
}
