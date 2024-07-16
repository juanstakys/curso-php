<?php
class SuperHero
{
    public function __construct(
        private string $name,
        public string $surname
    ) {
    }

    public function show_all()
    {
        return get_object_vars($this);
    }
}

$hero = new SuperHero("Juan", "Stak");
var_dump($hero->show_all());
