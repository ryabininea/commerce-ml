<?php


namespace CommerceML\Implementation;


use CommerceML\DefaultImplementation;
use CommerceML\Implementation;
use CommerceML\Nodes\Prices;

class Offer extends \CommerceML\Nodes\Offer implements Implementation
{
    protected $id;
    protected $name;
    protected $article;
    protected $prices;

    use DefaultImplementation;

    public function id(): string
    {
        return $this -> id;
    }

    public function article(): string
    {
        return $this -> article;
    }

    public function name(): string
    {
        return $this -> name;
    }

    public function prices(): Prices
    {
        return $this -> prices;
    }
}