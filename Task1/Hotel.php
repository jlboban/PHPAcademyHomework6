<?php

class Hotel
{
    private $name;
    private $availableRooms;

    public function __construct(string $name = null, int $availableRooms = null)
    {
        $this->name = $name;
        $this->availableRooms = $availableRooms;
    }

    public function __set($name, $value)
    {
        if (property_exists($this, $name))
        {
            $this->$name = $value;
        }
    }

    public function __get($name)
    {
        return isset($this->$name) ? $this->$name : null;
    }
}

$fourSeasons = new Hotel();
$fourSeasons->name = "Four Seasons";
$fourSeasons->availableRooms = 64;
$fourSeasons->iDontExist = "TestingNonexistentProperty";
var_dump($fourSeasons);

$hilton = new Hotel("Hilton", 128);
$hilton->iDontExistEither = "TestingAnotherProperty";
var_dump($hilton);

$sheraton = new Hotel("Sheraton");
$sheraton->availableRooms = 32;
var_dump($sheraton);
