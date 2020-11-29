<?php


namespace CommerceML\Constructors;

use CommerceML\Implementation\Offers;

class OfferList extends  \CommerceML\Implementation\OfferList
{
    /**
     * OfferList constructor.
     * @param string $id
     * @param string $name
     * @param Offers $offers
     */
    public function __construct(string $id, string $name, Offers $offers)
    {
        $this->id = $id;
        $this->name = $name;
        $this->offers = $offers;
    }
}