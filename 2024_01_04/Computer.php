<?php

class Computer
{
    static int $count = 0;

    private string $cpu;
    private string $ram;
    private string $gpu;
    private string $storage;

    public function __construct(
        string $cpu,
        string $ram,
        string $gpu,
        string $storage
    ){
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->gpu = $gpu;
        $this->storage = $storage;

        echo "A new computer has been created! <br>";

        self::$count++;
    }

    public function __destruct()
    {
        echo "The computer has been destroyed! <br>";

        self::$count--;
    }

    function start(): void
    {
        echo "Computer is starting...";
    }

    public static function getCount(): int
    {
        return self::$count;
    }
}