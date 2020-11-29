<?php


namespace CommerceML\Constructors;


class Prices extends \CommerceML\Implementation\Prices
{
    /**
     * Prices constructor.
     * @param $prices
     */
    public function __construct (array $prices)
    {
        $this->prices = $prices;
    }
}