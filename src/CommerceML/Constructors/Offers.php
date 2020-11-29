<?php


namespace CommerceML\Constructors;


class Offers extends \CommerceML\Implementation\Offers
{
    /**
     * Offers constructor.
     * @param array $offers
     */
    public function __construct (array $offers)
    {
        $this->offers = $offers;
    }
}