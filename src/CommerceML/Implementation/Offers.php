<?php


namespace CommerceML\Implementation;


use CommerceML\DefaultImplementation;
use CommerceML\Implementation;
use ArrayAccess;
use CommerceML\Traits\ImplementsCollection;
use IteratorAggregate;
use Countable;

class Offers extends \CommerceML\Nodes\Offers implements Implementation, ArrayAccess, IteratorAggregate, Countable
{
    protected $offers;


    use DefaultImplementation;

    use ImplementsCollection;
    const DATA_FIELD = 'offers';

    public function offers (): array
    {
        return $this -> offers;
    }
}