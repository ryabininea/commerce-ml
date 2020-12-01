<?php


namespace CommerceML\Constructors;

use CommerceML\Implementation\Prices;

class Offer extends \CommerceML\Implementation\Offer
{
    /**
     * Offer constructor.
//     * @param string $id
     * @param string $article
     * @param string $name
     * @param Prices $prices
     */
    public function __construct (
//        string $id,
        string $article,
        string $name,
        Prices $prices)
    {
//        $this->id = $id;
        $this->article = $article;
        $this->name = $name;
        $this->prices = $prices;
    }
}