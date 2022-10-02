<?php

class SomeObjectsHandler
{

    public function __construct()
    {
        
    }

    public function handleObjects(array $objects): array
    {
        $handlers = [];
        foreach ($objects as $object) {
            $handlers[] = 'handle_' . $object->getObjectName();
        }

        return $handlers;
    }

}

$objects = [
    new SomeObject1(),
    new SomeObject2(),
];

$soh = new SomeObjectsHandler();
$soh->handleObjects($objects);
