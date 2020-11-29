<?php


namespace CommerceML\Constructors;


class Price extends \CommerceML\Implementation\Price
{
    /**
     * Price constructor.
     * @param string $name
     * @param string $presentation
     * @param string $pricePerUnit
     * @param string $currency
     * @param string $unit
     * @param string $koef
     */
    public function __construct(
        string $name,
        string $presentation,
        string $pricePerUnit,
        string $currency,
        string $unit,
        string $koef
    )
    {
        $this->name = $name;
        $this->presentation = $presentation;
        $this->pricePerUnit = $pricePerUnit;
        $this->currency = $currency;
        $this->unit = $unit;
        $this->koef = $koef;
    }


}