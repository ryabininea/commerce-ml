<?php


namespace CommerceML\Constructors;


class Offer extends \CommerceML\Implementation\Offer
{
    /**
     * Offer constructor.
     * @param string $article
     * @param string $name
     * @param array $prices
     */
    public function __construct (string $article, string $name, array $prices)
    {
        $this->article = $article;
        $this->name = $name;
        $this->prices = $prices;
    }
}