<?php


namespace App\Services;


use Psr\Log\LoggerInterface;

class GiftsService
{
    public $gifts = ['flowers','car','money','coins','pencils','ipad'];

    public function __construct(LoggerInterface $logger)
    {
        $logger->info("Gifts has been shuffled.");
        shuffle($this->gifts);
    }
}