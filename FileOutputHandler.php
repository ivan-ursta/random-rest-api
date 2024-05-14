<?php

class FileOutputHandler implements OutputHandlerInterface
{
    public function output(string $advice): void
    {
        file_put_contents('advice.txt', $advice);
        echo "Advice written to advice.txt\n";
    }
}