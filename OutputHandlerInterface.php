<?php

interface OutputHandlerInterface
{
    public function output(string $advice): void;
}