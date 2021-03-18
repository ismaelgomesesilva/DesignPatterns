<?php

namespace DesignPattern\Behavioral\Memento;

use DateTime;

interface Memento
{
    public function getDate(): DateTime;
    public function getName(): string;
}
