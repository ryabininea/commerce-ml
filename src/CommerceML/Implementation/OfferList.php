<?php


namespace CommerceML\Implementation;


use CommerceML\DefaultImplementation;
use CommerceML\Implementation;
use CommerceML\Nodes\Offers;

class OfferList extends \CommerceML\Nodes\OfferList implements Implementation
{
    protected $id;
    protected $name;
    protected $offers;
    protected $updateOnly;

    use DefaultImplementation;

    public function id(): string
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function offers(): Offers
    {
        return $this->offers;
    }
    public function updateOnly(): string
    {
        return $this->updateOnly;
    }

}