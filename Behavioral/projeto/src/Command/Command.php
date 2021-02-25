<?php

namespace Alura\DesignPattern\Command;

interface Command
{
    function execute(): void;

    function getId(): int;

    function getStatus(): int;
}
