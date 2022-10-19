<?php
namespace Webt\MedtCore1Review;

class ConsoleLogger extends AbstractLogger implements LoggerInterface
{
    function __construct($name){
        parent::__construct($name);
    }

    public function getName(){
        return parent::getName();
    }

    public function log(string $text){
        return $text;
    }
}