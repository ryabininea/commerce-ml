<?php

namespace CommerceML\Implementation;


use CommerceML\DefaultImplementation;
use CommerceML\Implementation;
use ArrayAccess;
use CommerceML\Traits\ImplementsCollection;
use IteratorAggregate;
use Countable;

class Prices extends \CommerceML\Nodes\Prices implements Implementation, ArrayAccess, IteratorAggregate, Countable
{
    protected $prices;


    use DefaultImplementation;

    use ImplementsCollection;
    const DATA_FIELD = 'prices';

    public function prices (): array
    {
        return $this -> prices;
    }
}