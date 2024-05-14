<?php

class ConsoleOutputHandler implements OutputHandlerInterface
{
    public function output(string $advice): void
    {
        echo "Advice: $advice\n";
    }
}