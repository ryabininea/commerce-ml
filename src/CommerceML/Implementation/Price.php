<?php


namespace CommerceML\Implementation;

use CommerceML\DefaultImplementation;
use CommerceML\Implementation;

class Price extends \CommerceML\Nodes\Price implements Implementation
{
    protected $name;
    protected $presentation;
    protected $pricePerUnit;
    protected $currency;
    protected $unit;
    protected $koef;

    use DefaultImplementation;

    public function name(): string
    {
        return $this -> name;
    }

    public function presentation(): string
    {
        return $this -> presentation;
    }

    public function pricePerUnit(): string
    {
        return $this -> pricePerUnit;
    }

    public function currency(): string
    {
        return $this -> currency;
    }

    public function unit(): string
    {
        return $this -> unit;
    }

    public function koef(): string
    {
        return $this -> koef;
    }
}